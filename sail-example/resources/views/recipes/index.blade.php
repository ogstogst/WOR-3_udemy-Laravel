<x-app-layout>
  <div class="grid grid-cols-3 gap-4">
    <div class="col-span-2 bg-white rounded p-4">
      <div class="mb-4"></div>
      @foreach($recipes as $recipe)
      <a href="" class="flex flex-col items-center bg-white mb-6 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100">
        <img src="{{ $recipe->image }}" alt="{{ $recipe->title }}" class="object-cover rounded-t-lg h-40 w-40 mrounded-none rounded-l-lg">
        <div class="flex flex-col justify-between p-4 leading-normal">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-800">{{ $recipe->title }}</h5>
          <p class="mb-3 font-normal">{{ $recipe->description }}</p>
          <div class="flex">
            <p class="font-bold mr-2">{{ $recipe->name }}</p>
            <p class="text-gray-500">{{ $recipe->created_at->format('Y年m月d日') }}</p>
          </div>
        </div>
      </a>
      @endforeach
      {{-- {{ $recipes->links() }} --}}
    </div>
    <div class="col-span-1 bg-white p-4 h-max sticky top-4">
      <form action="{{ route('recipe.index') }}" method="GET">
        <div class="flex">
          <svg class="w-6 h-6 text-gray-700 mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" />
            <circle cx="10" cy="10" r="7" />
            <line x1="21" y1="21" x2="15" y2="15" />
          </svg>
          <h3 class="text-xl text-gray-800 font-bold mb-4">レシピ検索</h3>
        </div>
        <div class="mb-4 p-6 border border-gray-300">
          <label for="text-lg text-gray-800">評価</label>
          <div class="ml-4 mb-2">
            <input type="radio" name="rating" value="0" id="rating0" class="">
            <label for="raiting0">指定しない</label>
          </div>
          <div class="ml-4 mb-2">
            <input type="radio" name="rating" value="3" id="rating3" class="">
            <label for="raiting3">3以上</label>
          </div>
          <div class="ml-4 mb-2">
            <input type="radio" name="rating" value="4" id="rating4" class="">
            <label for="raiting4">4以上</label>
          </div>
        </div>
        <div class="mb-4 p-6 border border-gray-300">
          <label for="" class="text-lg text-gray-800">カテゴリー</label>
          @foreach($categories as $category)
          <div class="ml-4 mb-2">
            <input type="checkbox" name="categories[]" value="" id="">
            <label for=""></label>
          </div>
          @endforeach
        </div>
        <input type="text" name="title" value="" placeholder="レシピ名を入力" class="border border-gray-300 p-2 mb-4 w-full">
        <div class="text-center">
          <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">検索</button>
        </div>
      </form>
    </div>
  </div>
</x-app-layout>