<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider_all()
    {
        $sliders = Slider::all();

        return view("admin.slider.slider_all", compact("sliders"));
    }

    public function slider_addPage()
    {
        $slider_data = new Slider;

        $title = "Slider data add";

        $url = route('admin.slider_addPage');

        return view("admin.slider.slider_add", compact("slider_data", "url", "title"));
    }

    public function slider_add(Request $request)
    {
        Slider::create($request->all());

        return redirect()->route("admin.slider_all")->with("success", "New Slider added successfully");
    }

    public function slider_edit($id)
    {
        $slider_data = Slider::find($id);

        $title = "Slider data update";
        
        $url = route('admin.slider_update',['id'=> $slider_data->id]);

        return view("admin.slider.slider_add", compact("slider_data", "url", "title"));

    }

    public function slider_update(Request $request, $id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route('admin.categories_allPage')->with('success-trash', 'Slider not found.');
        }
        $slider->update($request->all());

        return redirect()->route("admin.slider_all")->with("success", "Slider data update successfully");
    }


    public function slider_delete($id)
    {
        $slider = Slider::find($id);

        if (!$slider) {
            return redirect()->route("admin.slider_all")->with("success-trash", "Slider not found or already deleted.");
        }

        $slider->delete();

        return redirect()->route("admin.slider_all")->with("success-delete", "Slider deleted successfully.");
    }








}
