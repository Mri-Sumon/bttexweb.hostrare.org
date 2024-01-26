<?php

namespace App\Http\Controllers;
use App\Settings;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Validator;
use Session;
use App\Mail\FeedbackMail;
use Mail;
use App\Product;
use Carbon\Carbon;
use Auth;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function settings()
    {
        $singleData=Settings::where('id',1)->first();
        return view('settings')->with('singleData',$singleData);
    }
    public function saveSettings(Request $request)
    {
        $rules = array(
            'name'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('settings')
                ->withErrors($validator);
        } else {
            $settings = Settings::find(1);
            $settings->name=$request->name;
            if($request->icon){
            $imageName1=Carbon::now()->timestamp.'.'.$request->icon->extension();
            $request->icon->storeAs('/slider/',$imageName1);
            $settings->icon=$imageName1;
            }
            if($request->logo){
            $imageName2=Carbon::now()->timestamp.'.'.$request->logo->extension();
            $request->logo->storeAs('/slider/',$imageName2);
            $settings->logo=$imageName2;
            }
            if($request->altlogo){
            $imageName3=Carbon::now()->timestamp.'.'.$request->altlogo->extension();
            $request->altlogo->storeAs('/slider/',$imageName3);
            $settings->altlogo=$imageName3;
            }
            $settings->scroll=$request->scroll;
            
            // Whychoose us
            $settings->paragraph=$request->paragraph;
            $settings->paragraph2=$request->paragraph2;
            $settings->paragraph3=$request->paragraph3;
            $settings->paragraph4=$request->paragraph4;
            
            $settings->address=$request->address;
            $settings->tel=$request->tel;
            
            $settings->webmail=$request->webmail;
            $settings->hotline=$request->hotline;
            
            $settings->mobile=$request->mobile;
            $settings->email=$request->email;
            $settings->link1=$request->link1;
            $settings->link2=$request->link2;
            $settings->link3=$request->link3;
            $settings->link4=$request->link4;
            $settings->office_hours=$request->office_hours;
            $settings->map_link=$request->map_link;
            $settings->copyright=$request->copyright;
            $settings->Delivery_Charge_Inside_Dhaka=$request->Delivery_Charge_Inside_Dhaka;
            $settings->Delivery_Charge_Outside_Dhaka=$request->Delivery_Charge_Outside_Dhaka;
            $settings->save();
            }
            Session::flash('message', 'Successfully Updated!');
            return redirect('settings');
    }
    public function feedbackemail(Request $request)
    {
        $rules = array(
            'name'       => 'required',
            'email'       => 'required',
            'subject'       => 'required',
            'message'       => 'required'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/');
            //echo 'All Inputs are required!';
        } else {
                    $data = [
                    'name'      => $request->name,
                    'message'   => $request->message,
                    'subject'   => $request->subject,
                    'email'      => $request->email,
                ];
        
                Mail::to('info@sajibenterprise.com', 'Website Feedback')->send(new FeedbackMail($data));
                return redirect('/');
            //echo 'Sent to Admin Email, We will contact you soon.';
        }
    }
}
