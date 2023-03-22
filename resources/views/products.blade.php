@extends('layouts.layout')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="mt-16">
        <p class="font-semibold mb-3">Нажмите на название продукта чтобы перейти к нему:</p>
        <table class="table-auto border">
            <thead>
            <tr>
                <th class="border font-medium p-4 pr-8 text-left">№</th>
                <th class="border font-medium p-4 pr-8 text-left">Продукт</th>
            </tr>
            </thead>
            <tbody>
            @php
                $count = 1;
            @endphp
            @foreach($products as $product)
                <tr>
                    <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900">
                        {{$count}}
                    </td>
                    <td class="border dark:border-slate-700 p-2">
                        <a class="font-semibold text-gray-900 hover:underline"
                           href="{{url('/product/'.$product->id)}}">{{$product->title}}</a>
                    </td>
                </tr>
                @php
                    $count++;
                @endphp
            @endforeach
            </tbody>
        </table>
    </div>
</div>