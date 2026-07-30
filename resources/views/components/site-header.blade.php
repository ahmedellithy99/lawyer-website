<header class="sticky top-0 z-50 border-b border-white/10 bg-navy/95 transition" :class="scrolled && 'shadow-lg'">
 <div class="shell flex h-20 items-center justify-between gap-5"><x-logo />
  <nav class="hidden items-center gap-5 lg:flex" aria-label="التنقل الرئيسي">@foreach(config('lawoffice.nav') as $item)<a href="{{ route($item['route']) }}{{ isset($item['fragment']) ? '#'.$item['fragment'] : '' }}" class="text-sm text-stone transition hover:text-white {{ request()->routeIs($item['route']) ? 'text-white' : '' }}">{{ $item['label'] }}</a>@endforeach</nav>
  <a class="btn btn-gold hidden sm:inline-flex" href="{{ route('contact') }}">احجز استشارتك</a>
  <button @click="open=!open" class="grid h-11 w-11 place-items-center border border-white/30 text-white lg:hidden" :aria-expanded="open.toString()" aria-label="فتح قائمة التنقل"><span x-text="open ? '×' : '☰'"></span></button>
 </div>
 <div x-show="open" x-transition class="border-t border-white/10 bg-navy lg:hidden" @click.outside="open=false"><nav class="shell grid py-4" aria-label="التنقل على الهاتف">@foreach(config('lawoffice.nav') as $item)<a @click="open=false" href="{{ route($item['route']) }}{{ isset($item['fragment']) ? '#'.$item['fragment'] : '' }}" class="border-b border-white/10 py-3 text-stone">{{ $item['label'] }}</a>@endforeach</nav></div>
</header>
