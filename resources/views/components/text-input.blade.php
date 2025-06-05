
@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => '
    border-gray-300 
    dark:border-gray-700 
    dark:bg-[#B2C6D5] 
    dark:text-black-300 
    focus:border-[#732255]
    focus:ring-[#732255] 
    dark:focus:border-[#732255] 
    dark:focus:ring-[#732255] 
    rounded-md shadow-sm
']) }}>
