<div class="flex flex-col items-center my-8 gap-10">
    <form acton="">
        <textarea wire:model.live="message" name="" id="" cols="30" rows="10" class="bg-white/10 text-white py-2 px-3 rounded-xl"></textarea>
    </form>

    <!-- <div>
        @dump($this->letters)
    </div> -->

    <x-code :message="$message" :letters="$this->letters" />

    <x-legend :letters="$this->letters" />
</div>
