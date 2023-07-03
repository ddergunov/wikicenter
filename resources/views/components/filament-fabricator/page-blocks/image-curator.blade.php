@aware(['image'])
<div class="px-4 py-4 md:py-8">
  <div class="mx-auto max-w-7xl">
    @if ($image->hasCuration('thumbnail'))
      <x-curator-curation :media="$image" curation="thumbnail" />
    @else
      <x-curator-glider class="w-auto object-cover" :media="$image" :width="curator()->preset('thumbnail')['width']" :height="curator()->preset('thumbnail')['height']" />
    @endif
  </div>
</div>
