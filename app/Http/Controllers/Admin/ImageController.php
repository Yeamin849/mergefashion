<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Log;

class ImageController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
    {
        return view('admin.image.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        // $width = $request->input('width');
        // $height = $request->input('height');

        // Generate a unique filename
        $imageName = time() . '.' . $image->getClientOriginalExtension();

        // Define the folder path
        $folderPath = public_path('images/products/' . date('d_m_Y'));

        // Create the directory if it doesn't exist
        if (!file_exists($folderPath)) {
            mkdir($folderPath, 0755, true);
        }

        // Resize the image to the specified dimensions
        $resizeImage = Image::make($image)->fit(2048, 2048);

        // Move and store the resized image
        $resizeImage->save($folderPath . '/' . $imageName);

        /* 
            Write Code Here for
            Store $imageName name in DATABASE from HERE 
        */
            $imagePath = 'images/products/' . date('d_m_Y') . '/' . $imageName;

        return back()
            ->with('success', 'You have successfully uploaded the image.')
            ->with('image', $imageName);
    }


    public function images_all()
    {
        $imagePath = public_path('images/products');

        $folderNames = array_diff(scandir($imagePath), ['.', '..']);

        $folders = [];

        foreach ($folderNames as $folderName) {

            $folderPath = $imagePath . '/' . $folderName;

            if (is_dir($folderPath)) {

                $images = array_diff(scandir($folderPath), ['.', '..']);

                $folders[] = [
                    'name' => $folderName,
                    'images' => $images,
                    'lastModified' => filemtime($folderPath),
                    // Get last modified time
                ];
            }
        }

        // Sort the folders by last modified time in descending order (most recent first)
        usort($folders, function ($a, $b) {
            return $b['lastModified'] - $a['lastModified'];
        });

        return view('admin.image.index', ['folders' => $folders]);


    }


    public function deleteImage($folder, $image)
    {
        $imagePath = public_path('images/products/' . $folder . '/' . $image);

        if (File::exists($imagePath)) {

            File::delete($imagePath);

            return back()->with('success-delete', 'Image deleted successfully.');

        } else {

            return back()->with('success-trash', 'Unable to delete the file.');

        }
    }


    public function deleteFolder($folderName)
    {
        // Delete the folder and its contents
        $folderPath = public_path('images/products/' . $folderName);

        try {
            if (File::exists($folderPath)) {

                File::deleteDirectory($folderPath);

                return redirect()->back()->with('success-delete', 'Folder deleted successfully');
            } else {
                // You can also remove the folder from the database if necessary
                return redirect()->back()->with('error-delete', 'Folder does not exist');
            }
        } catch (\Exception $e) {
            // Log the error for debugging
            Log::error('Error deleting folder: ' . $e->getMessage());

            return redirect()->back()->with('error-delete', 'Unable to delete the folder');
        }
    }


}