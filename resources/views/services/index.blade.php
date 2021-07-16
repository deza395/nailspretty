<x-app-layout>
    <div class=" container max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
  <div class="grid grid-cols-3 gap-6">
      @foreach ($services as $service)
      <article>
      <h2> {{ $service->name}}</h2>
       
      
          <p> {!!$service->body!!}</P>
      </article>
      <article class="w-full h-80 bg-cover @if ($loop->first) md:col-span-2 @endif" style="background-image: url(@if ($service->image) {{Storage::url($service->image->url)}}  @else https://cdn.pixabay.com/photo/2021/06/28/10/15/coffee-6371149_960_720.jpg @endif)">
  </article>
  <img src="https://cdn.pixabay.com/photo/2021/06/28/10/15/coffee-6371149_960_720.jpg" alt="">
     
      @endforeach
  </div>
    </div>
</x-app-layout>