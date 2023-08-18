
<ul class="mb-5 flex list-none flex-row flex-wrap border-b-0 pl-0 justify-center" role="tablist" data-te-nav-ref>
    @foreach ($menus as $menu)
      <li role="presentation">
        <a href="{{ route('menu.show', $menu->id) }}" class="my-2 block border-x-0 border-b-2 border-t-0 border-transparent px-7 pb-3.5 pt-4 text-xs font-medium uppercase leading-tight text-neutral-500 hover:isolate hover:border-transparent hover:bg-neutral-100 focus:isolate focus:border-transparent data-[te-nav-active]:border-primary data-[te-nav-active]:text-primary dark:text-neutral-400 dark:hover:bg-transparent dark:data-[te-nav-active]:border-primary-400 dark:data-[te-nav-active]:text-primary-400" data-te-toggle="pill" data-te-target="#tabs-{{ $menu->id }}" role="tab" aria-controls="tabs-{{ $menu->id }}" aria-selected="true">{{ $menu->name }}</a>
      </li>
    @endforeach
  </ul>