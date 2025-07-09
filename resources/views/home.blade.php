@include('header')

<div class="container mt-4">
    <div class="row justify-content-center g-4">
        <!-- Dashboard Cards -->
        @php
        $cards = [
            ['title' => 'Categories', 'count' => $category_count, 'link' => '/category', 'color' => '#E57373', 'icon' => 'bi-folder'], // Darker Pink
            ['title' => 'Total Revenue', 'count' => '₹' . number_format($rev, 2), 'link' => '/order', 'color' => '#DAA520', 'icon' => 'bi-currency-rupee'], // Darker Gold
            ['title' => 'Most Ordered Product', 'count' => $most_ordered_product_name, 'link' => '/product', 'color' => '#6495ED', 'icon' => 'bi-cart'], // Darker Blue
            ['title' => 'Products', 'count' => $product_count, 'link' => '/product', 'color' => '#D14795', 'icon' => 'bi-box'], // Darker Pink-Purple
            ['title' => 'Total Audios', 'count' => $sleeping_count, 'link' => '/sleepingaid', 'color' => '#2E8B57', 'icon' => 'bi-music-note'], // Darker Green
            ['title' => 'Total Tasks', 'count' => $task_count, 'link' => '/task', 'color' => '#CD5C5C', 'icon' => 'bi-list-task'], // Darker Salmon
            ['title' => 'Coupons', 'count' => $coupon_count, 'link' => '/coupon', 'color' => '#A569BD', 'icon' => 'bi-ticket'], // Darker Purple
            ['title' => 'Meditation', 'count' => $medi_count, 'link' => '/meditation', 'color' => '#D2691E', 'icon' => 'bi-spa'], // Darker Brown-Orange
            ['title' => 'Banner', 'count' => $banner_count, 'link' => '/banner', 'color' => '#20B2AA', 'icon' => 'bi-image'] // Darker Turquoise
        ];
    @endphp

    @foreach ($cards as $card)
    <div class="col-md-4">
        <div class="card shadow border-0 rounded-4 text-center text-white" style="background-color: {{ $card['color'] }};">
            <div class="card-body d-flex flex-column justify-content-center">
                <i class="bi {{ $card['icon'] }} display-4 mb-2"></i>
                <h5 class="card-title fw-semibold fs-4">{{ $card['title'] }}</h5>
                <p class="card-text fw-bold fs-3">{{ $card['count'] }}</p>
                <a href="{{ $card['link'] }}" class="btn btn-light mt-auto fw-bold">View {{ $card['title'] }}</a>
            </div>
        </div>
    </div>
    @endforeach


        <!-- Recent Orders Table -->
        <div class="col-md-12">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center py-3 rounded-top">
                    <h4 class="mb-0">Recent Orders</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-center">
                            <thead style="background-color: #53a4dd; color: #ffffff;">
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Order ID</th>
                                    <th>Pic</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total Amount</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                @foreach ($data as $item)        
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $item->_id }}</td>
                                    <td><img src="/images/{{ $item->pic1 }}" height="40" width="40" class="rounded" alt=""></td>
                                    <td>{{ $item->pname }}</td>
                                    <td>₹{{ $item->amount }}</td>
                                    <td>{{ $item->qty }}</td>
                                    <td>₹{{ $item->tot_amount }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Table -->
        <div class="col-md-12 mt-4">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-success text-white text-center py-3 rounded-top">
                    <h4 class="mb-0">User List</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover text-center" id="table1">
                            <thead style="background-color: #77e992; color: #ffffff;">
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Full Name</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    {{-- <th>Image</th> --}}
                                </tr>
                            </thead>                            
                            <tbody>
                                @foreach ($users as $index => $user)        
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $user->fullname }}</td>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->email }}</td>
                                    {{-- <td>
                                        @if($user->image) 
                                            <img height="50" width="50" class="rounded-circle" src="{{ asset($user->image) }}" alt="User Image">
                                        @else
                                            <img height="50" width="50" class="rounded-circle" src="{{ asset('images/default.png') }}" alt="Default Image">
                                        @endif
                                    </td> --}}
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@include('footer')
