@props([
    'header' => '',
])

<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-grey-200 dark:divide-grey-700">
                    <thead>
                        <tr>
                            {{$header}}
                        </tr>
                    </thead>
                    <tbody>
                        {{$slot}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>

document.querySelectorAll('th').foreach(el=>el.classList.add("px-6", "py-3", "text-left", "text-xs", "font-medium", "text-gray-500", "uppercase"));
document.querySelectorAll('td').foreach(el=>el.classList.add("px-6", "py-4", "whitespace-nowrap", "text-sm", "font-medium", "text-gray-800", "dark:text-grey-200"));
</script>