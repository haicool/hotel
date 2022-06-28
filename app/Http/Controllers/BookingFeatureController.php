<?php

namespace App\Http\Controllers;

use App\Models\BookingFeature;
use App\Http\Requests\StoreBookingFeatureRequest;
use App\Http\Requests\UpdateBookingFeatureRequest;

class BookingFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBookingFeatureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBookingFeatureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BookingFeature  $bookingFeature
     * @return \Illuminate\Http\Response
     */
    public function show(BookingFeature $bookingFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BookingFeature  $bookingFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(BookingFeature $bookingFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBookingFeatureRequest  $request
     * @param  \App\Models\BookingFeature  $bookingFeature
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBookingFeatureRequest $request, BookingFeature $bookingFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BookingFeature  $bookingFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(BookingFeature $bookingFeature)
    {
        //
    }
}
