<div>
     <div>
          @if($date)
              <p>Posts for: {{ $date }}</p>
          @else
              <p>Select a date to see posts.</p>
          @endif
      
          <ul>
              @foreach($posts as $post)

               <div class="max-w-sm p-6 m-5 bg-white border border-gray-200 rounded-lg shadow  ">
                    date- {{ $date }}
                    <a href="#">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 ">{{ $post['content'] }}</p>
                    <livewire:content-box :date="$date" :selectDate="$selectDate" key="{{$post['title']}}"/>
               </div>
                  
                 
              @endforeach
          </ul>
      </div>
</div>
