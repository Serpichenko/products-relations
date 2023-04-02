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
                <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900 text-center" colspan="2">
                    Варианты:
                </td>
            </tr>
            @foreach($variations as $variationKey=>$variation)
                <tr>
                    <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900">{{$variationKey}}</td>
                    <td class="border dark:border-slate-700 p-2 font-semibold text-gray-900">
                        @foreach($variation as $value)
                            @if(in_array($value->property_value_id, $productVariants))
                                <span class="mb-2 p-1 border bg-red-300">
                                {{$value->propertyValue->value}}
                            </span>
                            @else
                                <a class="mb-2 p-1 border"
                                   href="{{url('/product/'.$value->variant_id)}}"
                                >
                                    {{$value->propertyValue->value}}
                                </a>
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>