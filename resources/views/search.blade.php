@include('header')

<div class="container mt-4">
    <h3 class="mb-3">Search Results</h3>
    
    @if(empty($users) && empty($categories) && empty($banners) && empty($tasks) && empty($orders) && empty($products) && empty($therapists) && empty($sleepingaids) && empty($meditations))
        <p class="text-muted">No results found.</p>
    @else
        <div class="list-group">
            @if(!$users->isEmpty())
                <h5 class="mt-3">Users</h5>
                @foreach($users as $user)
                    <a href="{{ $user->url }}" class="list-group-item list-group-item-action">
                        {{ $user->fullname }} ({{ $user->username }}) - {{ $user->email }}
                    </a>
                @endforeach
            @endif
            
            @if(!$categories->isEmpty())
                <h5 class="mt-3">Categories</h5>
                @foreach($categories as $category)
                    <a href="{{ $category->url }}" class="list-group-item list-group-item-action">
                        {{ $category->cat_name }} - {{$category->cat_pic}}
                    </a>
                @endforeach
            @endif

            @if(!$banners->isEmpty())
                <h5 class="mt-3">Banners</h5>
                @foreach($banners as $banner)
                    <a href="{{ $banner->url }}" class="list-group-item list-group-item-action">
                        {{ $banner->banner_name }} - {{$banner->banner_pic}}
                    </a>
                @endforeach
            @endif
            
            @if(!$tasks->isEmpty())
                <h5 class="mt-3">Tasks</h5>
                @foreach($tasks as $task)
                    <a href="{{ $task->url }}" class="list-group-item list-group-item-action">
                        {{ $task->image }} - {{$task->description}}
                    </a>
                @endforeach
            @endif

            @if(!$sleepingaids->isEmpty())
                <h5 class="mt-3">Sleeping Aid</h5>
                @foreach($sleepingaids as $sleepingaid)
                    <a href="{{ $sleepingaid->url }}" class="list-group-item list-group-item-action">
                        {{ $sleepingaid->title }} - {{$sleepingaid->audio_pic}} - {{$sleepingaid->audios}} 
                    </a>
                @endforeach
            @endif
            
            @if(!$orders->isEmpty())
                <h5 class="mt-3">Orders</h5>
                @foreach($orders as $order)
                    <a href="{{ $order->url}}" class="list-group-item list-group-item-action">
                        Order #{{ $order->pid }} - {{$order->username}}  - {{$order->pname}} - {{$order->amount}} - {{ $order->status }}
                    </a>
                @endforeach
            @endif
            
            @if(!$products->isEmpty())
                <h5 class="mt-3">Products</h5>
                @foreach($products as $product)
                    <a href="{{ $product->url}}" class="list-group-item list-group-item-action">
                        {{ $product->name }} - {{ $product->description }} - {{$product->image}} - {{$product->price}} - {{$product->discount}}
                    </a>
                @endforeach
            @endif
            
            @if(!$therapists->isEmpty())
                <h5 class="mt-3">Therapists</h5>
                @foreach($therapists as $therapist)
                    <a href="{{ $therapist->url }}" class="list-group-item list-group-item-action">
                        {{ $therapist->name }} - {{ $therapist->title }} - {{$therapist->desc}} - {{$therapist->image}}  
                    </a>
                @endforeach
            @endif
            
            {{-- @if(!$sleepingaids->isEmpty())
                <h5 class="mt-3">Sleeping Aids</h5>
                @foreach($sleepingaids as $sleepingaid)
                    <a href="{{ url('admin/sleepingaids/'.$sleepingaid->id) }}" class="list-group-item list-group-item-action">
                        {{ $sleepingaid->name }}
                    </a>
                @endforeach
            @endif --}}
            
            @if(!$meditations->isEmpty())
                <h5 class="mt-3">Meditations</h5>
                @foreach($meditations as $meditation)
                    <a href="{{ $meditation->url }}" class="list-group-item list-group-item-action">
                        {{ $meditation->title }} - {{$meditation->name}} - {{$meditation->description}} - {{$meditation->guided_video}}  
                    </a>
                @endforeach
            @endif
        </div>
    @endif
</div>

@include('footer')
