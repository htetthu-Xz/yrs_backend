@if(count($errors) > 0)
    <div class="tw-flex tw-p-4 tw-mb-4 tw-text-sm tw-text-red-800 tw-rounded-lg tw-bg-red-100 tw-border tw-border-red-500" role="alert">
        <svg class="tw-w-4 tw-h-4 tw-me-2 tw-shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
        <span class="tw-sr-only">Danger</span>
        <div>
            <span class="tw-font-medium">Ensure that these requirements are met:</span>
            <ul class="tw-mt-2 tw-list-disc tw-list-outside tw-space-y-1 tw-ps-2.5">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif