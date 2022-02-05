
 <x-layouts.main>
    <div class="flex-1 space-y-5">

        @for ($i = 0; $i < 6; $i++)
        <div class="bg-white shadow rounded">
            <img src="https://picsum.photos/800/350?random={{rand(0,100)}}" alt="Random image" class="rounded-t">
            <div class="p-5">
                <div class="font-bold text-xs text-blue-700">Datum</div>
                <div class="text-3xl text-blue-900">Header</div>
                <div class="text-lg text-gray-700">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, ad adipisci aliquid distinctio dolores,
                    doloribus, esse ex laudantium maiores modi molestiae natus necessitatibus officiis praesentium quos repellat repellendus saepe vitae.
                </div>
            </div>
            <div class="footer rounded-b border-t border-gray-300 p-5 text-gray-700 font-bold text-xs bg-indigo-100">
                Autor
            </div>
        </div>
        @endfor

    </div>
    {{-- 2. Spalte ----------------------------------------------------------------------------------}}
    <div class="space-y-5" style="width:300px;">

        <div class="bg-blue-700 shadow rounded-sm">
           <h2 class="text-white text-2xl p-5">Newsletter</h2>
            <div class="border-t border-blue-600 text-white p-5 text-sm">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum laboriosam omnis repudiandae unde.
                <div class="flex mt-5">
                    <input type="text" name="newsletter" class="rounded-l-sm text-gray-800 px-4 py-2 h-12" placeholder="E-Mail Adresse" style="min-width: 0px;">
                    <button type="button" class="bg-blue-800 h-12 text-xs px-4 py-2 rounded-r-sm">abonnieren</button>
                </div>
            </div>
        </div>

        <x-post.newest/>
        <x-post.trending/>
        <x-post.categories/>

    </div>
 </x-layouts.main>
