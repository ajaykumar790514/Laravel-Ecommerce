<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use Livewire\Component;

class DashBoard extends Component
{

    public     $categoryData = [];

    public function mount()
    {
        $this->adminCategory();
    }
    public function adminCategory()
    {
        $category = Category::with('products')->get()->toArray();
        $categories = [];
        $products = [];


        foreach ($category as $key => $value) {
            $categories[] = $value['name'];
            $products[] = count($value['products']);
        }

        $this->categoryData = [
            'series' => $products,
            'labels' => $categories,

            'chartOptions' => [
                'chart' => [
                    'type' => 'donut',
                    'width' => '320px',
                ],
                'legend' => [
                    'show' => false
                ],
                'responsive' => [[
                    'breakpoint' => 480,
                    'options' => [
                        'chart' => [
                            'width' => 300
                        ],

                        // 'legend' => [
                        //     'position' => 'bottom'
                        // ]
                    ]
                ]],
                'plotOptions' => [
                    'pie' => [
                        'donut' => [
                            'labels' => [
                                'show' => true,
                                'name' => [
                                    'show' => true,
                                    'fontSize' => '12px',
                                ],
                                'value' => [
                                    'show' => true,
                                    'fontSize' => '17px',
                                    // 'formatter' => function (val) {
                                    //     return val;
                                    // }
                                ],
                                'total' => [
                                    'show' => true,
                                    'label' => 'Total Product',
                                    // 'formatter' => function (w) {
                                    //     return w.globals.seriesTotals.reduce((a, b) => a + b, 0);
                                    // }
                                ]
                            ]
                        ]
                    ]
                ],
                'stroke' => [
                    'show' => true,
                    'width' => 7,
                    'colors' => ['#fff']
                ]
            ]
        ];
    }

    public function render()
    {
        $orders = Order::with('user')->latest()->take(4)->get();
        $users = User::latest()->take(4)->get();
        // dd($orders);
        return view('livewire.dash-board', compact('orders', 'users'))->layout('layouts.app');
    }
}
