<div class="flex flex-col items-center mt-8">
    <form acton="">
        <textarea wire:model.live="message" name="" id="" cols="30" rows="10" class="bg-white/10 text-white py-2 px-3 rounded-xl"></textarea>
    </form>

    <!-- <div>
        @dump($this->letters)
    </div> -->

    <div class="text-white text-centered mt-8 flex gap-7">
        @foreach(explode(' ', $message) as $word)
            <div class="word">
                @foreach(str_split($word) as $character)
                    <span class="material-symbols-outlined character">{{ $this->letters[strtolower($character)] ?? $character}}</span>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
