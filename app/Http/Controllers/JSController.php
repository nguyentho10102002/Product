<?php

namespace App\Http\Controllers;
use Faker\Generator;
use Illuminate\Container\Container;

use Illuminate\Http\Request;

class JSController extends Controller
{
    public function testJS()
    {
        return view("JS.index_1");
    }
    public function testJS2()
    {
        return view("JS.index_2");
    }
    public function testJS3()
    {
        return view("JS.index_3");
    }
    public function testJS4()
    {
        return view("JS.index_4");
    }
    public function testPostJS(){
        $faker = Container::getInstance()->make(Generator::class);
        return view('JS.index_1',compact("faker"));
    }
    public function testPostJS2(){
        $faker = Container::getInstance()->make(Generator::class);
        return response()->json([
            'firstName'   => $faker->firstName,
            'lastName'   => $faker->lastName,
            'diaChi'   => $faker->address,
            'soCard'   => $faker->creditCardNumber,
            'email'   => $faker->email,
            'phone'   => $faker->phoneNumber,
        ]);
    }
}
