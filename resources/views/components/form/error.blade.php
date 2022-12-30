@props(['name'])
@error($name)
    <div class=" text-red-500 text-xs mt-2">{{ $message }}</div>
@enderror
