@extends('layouts.layout')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="mt-16">
        <table class="table-auto border">
            <tbody>
            <tr>
                <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900">
                    Название продукта
                </td>
                <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900">
                    {{$product->title}}
                </td>
            </tr>
            <tr>
                <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900 text-center" colspan="2">Характеристики:</td>
            </tr>
            @foreach($product->properties as $property)
                <tr>
                    <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900">{{$property->title}}</td>
                    <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900">
                        @foreach($property->value as $value)
                            <p class="mb-2">{{$value->value}}</p>
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>