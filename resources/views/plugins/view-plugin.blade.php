@php
    $formatter = new \NumberFormatter(
        app()->getLocale(),
        \NumberFormatter::PADDING_POSITION,
    );
@endphp

<x-layouts.app>
    <section class="mx-auto w-full max-w-8xl px-5 sm:px-10">
        <div class="flex flex-wrap items-center justify-between gap-5 pt-20">
            {{-- Back Button --}}
            <a
                href="/plugins"
                class="flex items-center gap-3 text-dolphin transition duration-300 hover:-translate-x-1 hover:text-evening"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="25"
                    height="25"
                    viewBox="0 0 20 20"
                >
                    <path
                        fill="currentColor"
                        d="M2.64 11.917h16.591a.78.78 0 0 1 .769.792a.78.78 0 0 1-.769.791H.771c-.688 0-1.03-.857-.541-1.354L5.549 6.73a.754.754 0 0 1 1.087.006a.808.808 0 0 1-.005 1.119l-3.99 4.063Z"
                    />
                </svg>
                <div class="text-xl font-medium">Plugins</div>
            </a>
            <div class="flex flex-wrap items-center gap-3">
                {{-- Discord --}}
                <a
                    href="{{ $plugin['discord_link'] }}"
                    class="flex select-none items-center gap-2.5 rounded-lg bg-fair-pink bg-white py-2.5 pl-5 pr-6 text-center text-sm font-medium text-evening shadow-lg shadow-black/[0.01] transition duration-300 hover:-translate-y-0.5 hover:bg-white/80"
                >
                    <svg
                        class="w-[1.1rem]"
                        fill="none"
                        viewBox="0 0 71 55"
                        aria-hidden="true"
                    >
                        <g clip-path="url(#clip0)">
                            <path
                                d="M60.1045 4.8978C55.5792 2.8214 50.7265 1.2916 45.6527 0.41542C45.5603 0.39851 45.468 0.440769 45.4204 0.525289C44.7963 1.6353 44.105 3.0834 43.6209 4.2216C38.1637 3.4046 32.7345 3.4046 27.3892 4.2216C26.905 3.0581 26.1886 1.6353 25.5617 0.525289C25.5141 0.443589 25.4218 0.40133 25.3294 0.41542C20.2584 1.2888 15.4057 2.8186 10.8776 4.8978C10.8384 4.9147 10.8048 4.9429 10.7825 4.9795C1.57795 18.7309 -0.943561 32.1443 0.293408 45.3914C0.299005 45.4562 0.335386 45.5182 0.385761 45.5576C6.45866 50.0174 12.3413 52.7249 18.1147 54.5195C18.2071 54.5477 18.305 54.5139 18.3638 54.4378C19.7295 52.5728 20.9469 50.6063 21.9907 48.5383C22.0523 48.4172 21.9935 48.2735 21.8676 48.2256C19.9366 47.4931 18.0979 46.6 16.3292 45.5858C16.1893 45.5041 16.1781 45.304 16.3068 45.2082C16.679 44.9293 17.0513 44.6391 17.4067 44.3461C17.471 44.2926 17.5606 44.2813 17.6362 44.3151C29.2558 49.6202 41.8354 49.6202 53.3179 44.3151C53.3935 44.2785 53.4831 44.2898 53.5502 44.3433C53.9057 44.6363 54.2779 44.9293 54.6529 45.2082C54.7816 45.304 54.7732 45.5041 54.6333 45.5858C52.8646 46.6197 51.0259 47.4931 49.0921 48.2228C48.9662 48.2707 48.9102 48.4172 48.9718 48.5383C50.038 50.6034 51.2554 52.5699 52.5959 54.435C52.6519 54.5139 52.7526 54.5477 52.845 54.5195C58.6464 52.7249 64.529 50.0174 70.6019 45.5576C70.6551 45.5182 70.6887 45.459 70.6943 45.3942C72.1747 30.0791 68.2147 16.7757 60.1968 4.9823C60.1772 4.9429 60.1437 4.9147 60.1045 4.8978ZM23.7259 37.3253C20.2276 37.3253 17.3451 34.1136 17.3451 30.1693C17.3451 26.225 20.1717 23.0133 23.7259 23.0133C27.308 23.0133 30.1626 26.2532 30.1066 30.1693C30.1066 34.1136 27.28 37.3253 23.7259 37.3253ZM47.3178 37.3253C43.8196 37.3253 40.9371 34.1136 40.9371 30.1693C40.9371 26.225 43.7636 23.0133 47.3178 23.0133C50.9 23.0133 53.7545 26.2532 53.6986 30.1693C53.6986 34.1136 50.9 37.3253 47.3178 37.3253Z"
                                fill="currentColor"
                            />
                        </g>
                    </svg>
                    <div class="">Support</div>
                </a>

                {{-- Share --}}
                <div
                    class="flex cursor-pointer select-none items-center gap-2.5 rounded-lg bg-fair-pink bg-white py-2.5 pl-5 pr-6 text-center text-sm font-medium text-evening shadow-lg shadow-black/[0.01] transition duration-300 hover:-translate-y-0.5 hover:bg-white/80"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="19"
                        height="19"
                        viewBox="0 0 24 24"
                    >
                        <path
                            fill="none"
                            stroke="currentColor"
                            stroke-linecap="round"
                            stroke-width="1.8"
                            d="m2 8l6 2M6 4l2 3m3-.437l3.7-3.625c1.46-1.43 4.063-1.199 5.815.517M18.135 12l2.908-2.848c.59-.578.902-1.338.95-2.152M15 15.587L10.965 20c-1.392 1.524-3.876 1.277-5.548-.552c-1.67-1.828-1.897-4.546-.504-6.07L6.173 12"
                        />
                    </svg>
                    <div class="">Share</div>
                </div>

                @if ($plugin['price'] === 'Free')
                    {{-- Github Link --}}
                    <a
                        href="{{ $plugin['github_link'] }}"
                        target="_blank"
                        class="block select-none rounded-bl-lg rounded-br-2xl rounded-tl-lg rounded-tr-lg bg-salmon py-2.5 pl-5 pr-6 text-center text-sm font-medium text-white shadow-xl shadow-black/[0.02] transition duration-300 hover:-translate-y-0.5 hover:bg-salmon/80"
                    >
                        Visit Github
                    </a>
                @else
                    {{-- Price --}}
                    <a
                        href="{{ $plugin['buy_link'] }}"
                        target="_blank"
                        class="block select-none rounded-bl-lg rounded-br-2xl rounded-tl-lg rounded-tr-lg bg-salmon px-6 py-2.5 text-center text-sm font-medium text-white shadow-xl shadow-black/[0.02] transition duration-300 hover:-translate-y-0.5 hover:bg-salmon/80"
                    >
                        Buy for
                        {{ $plugin['price'] }}
                    </a>
                @endif
            </div>
        </div>

        <div class="flex flex-col items-start gap-20 pt-7 xl:flex-row">
            {{-- Left Side --}}
            <div class="w-full">
                <div class="">
                    <div class="text-3xl font-extrabold">
                        {{ $plugin['name'] }}
                    </div>
                    <div class="pt-2 font-medium text-dolphin/80">
                        {{ $plugin['description'] }}
                    </div>
                </div>
            </div>

            {{-- Right Side --}}
            <div class="w-full max-w-md">
                {{-- Creator --}}
                <div class="pt-10 text-evening">
                    <div class="text-lg font-extrabold">Creator</div>
                    <div class="grid w-full place-items-center pt-2">
                        {{-- Avatar --}}
                        <div
                            class="h-24 w-24 shrink-0 overflow-hidden rounded-full"
                        >
                            @if ($plugin['author']['avatar'])
                                <img
                                    src="{{ $plugin['author']['avatar'] }}"
                                    alt="plugin.author.name"
                                    class="aspect-square h-full w-full"
                                />
                            @else
                                <div
                                    class="grid h-full w-full place-items-center bg-fair-pink text-salmon/50"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="22"
                                        height="22"
                                        viewBox="0 0 24 24"
                                    >
                                        <g fill="currentColor">
                                            <circle
                                                cx="12"
                                                cy="6"
                                                r="4"
                                            />
                                            <path
                                                d="M20 17.5c0 2.485 0 4.5-8 4.5s-8-2.015-8-4.5S7.582 13 12 13s8 2.015 8 4.5Z"
                                            />
                                        </g>
                                    </svg>
                                </div>
                            @endif
                        </div>

                        {{-- Name --}}
                        <div class="pt-3.5 text-lg font-bold">
                            {{ $plugin['author']['name'] }}
                        </div>

                        {{-- Social Links --}}
                        @if ($plugin['author']['twitter'] || $plugin['author']['github'])
                            <div class="flex items-center gap-3.5 pt-2">
                                {{-- Twitter --}}
                                @if ($plugin['author']['twitter'])
                                    <a
                                        target="_blank"
                                        href="{{ $plugin['author']['twitter'] }}"
                                        class="grid h-8 w-8 place-items-center rounded-full bg-merino text-hurricane transition duration-200 hover:scale-110 hover:text-salmon"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                fill="currentColor"
                                                fill-rule="evenodd"
                                                d="M15.021 3.343c.509-.087 1.078-.116 1.614-.025a4.85 4.85 0 0 1 2.54 1.273c.456.01.905-.08 1.302-.208a5.36 5.36 0 0 0 1.098-.501l.009-.006a.75.75 0 0 1 1.042 1.037c-.207.315-.496.877-.819 1.507l-.155.301c-.185.36-.375.724-.552 1.036c-.111.196-.23.395-.35.567v.274A12.34 12.34 0 0 1 8.287 21.03a12.32 12.32 0 0 1-6.694-1.97a.75.75 0 0 1 .5-1.374a7.471 7.471 0 0 0 4.033-.642a4.858 4.858 0 0 1-2.61-2.922a.75.75 0 0 1 .147-.722l.01-.01A4.848 4.848 0 0 1 2.05 9.793v-.052a.75.75 0 0 1 .553-.724A4.84 4.84 0 0 1 2.09 6.84a4.9 4.9 0 0 1 .65-2.442a.75.75 0 0 1 1.232-.1a10.89 10.89 0 0 0 7.006 3.93a4.85 4.85 0 0 1 2.562-4.406c.402-.214.934-.385 1.482-.479ZM3.743 10.891a3.35 3.35 0 0 0 2.503 2.164a.75.75 0 0 1 .072 1.453c-.272.083-.551.14-.834.173a3.358 3.358 0 0 0 2.59 1.3a.75.75 0 0 1 .45 1.339a8.97 8.97 0 0 1-3.548 1.695a10.82 10.82 0 0 0 3.313.515h.009A10.838 10.838 0 0 0 19.25 8.607v-.535a.75.75 0 0 1 .186-.495c.07-.079.19-.261.36-.56c.16-.282.338-.622.523-.981l.033-.066a4.992 4.992 0 0 1-1.593.097a.75.75 0 0 1-.47-.237a3.35 3.35 0 0 0-1.904-1.032a3.42 3.42 0 0 0-1.11.025a3.605 3.605 0 0 0-1.028.323a3.35 3.35 0 0 0-1.678 3.74a.75.75 0 0 1-.767.925a12.39 12.39 0 0 1-8.149-3.627a3.41 3.41 0 0 0-.063.657v.002a3.34 3.34 0 0 0 1.486 2.785A.75.75 0 0 1 4.64 11a4.798 4.798 0 0 1-.897-.11Z"
                                                clip-rule="evenodd"
                                            />
                                        </svg>
                                    </a>
                                @endif

                                {{-- Github --}}
                                @if ($plugin['author']['github'])
                                    <a
                                        target="_blank"
                                        href="{{ $plugin['author']['github'] }}"
                                        class="grid h-8 w-8 place-items-center rounded-full bg-merino text-hurricane transition duration-200 hover:scale-110 hover:text-salmon"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="22"
                                            height="22"
                                            viewBox="0 0 24 24"
                                        >
                                            <g
                                                fill="none"
                                                stroke="currentColor"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="1.5"
                                            >
                                                <path
                                                    d="M16 22.027v-2.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7a5.44 5.44 0 0 0-1.5-3.75a5.07 5.07 0 0 0-.09-3.77s-1.18-.35-3.91 1.48a13.38 13.38 0 0 0-7 0c-2.73-1.83-3.91-1.48-3.91-1.48A5.07 5.07 0 0 0 5 5.797a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7a3.37 3.37 0 0 0-.94 2.58v2.87"
                                                />
                                                <path
                                                    d="M9 20.027c-3 .973-5.5 0-7-3"
                                                />
                                            </g>
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        @endif

                        {{-- Stats --}}
                        <div
                            class="mt-3 grid grid-cols-3 gap-10 rounded-2xl bg-white px-6 pb-3.5 pt-3 text-center shadow-lg shadow-black/[0.01]"
                        >
                            {{-- Plugins --}}
                            <div class="space-y-0.5">
                                <div class="font-extrabold">
                                    {{ $formatter->format($plugin['author']['stats']['plugins']) }}
                                </div>
                                <div
                                    class="text-sm font-medium text-dolphin/80"
                                >
                                    Plugins
                                </div>
                            </div>

                            {{-- Views --}}
                            <div class="space-y-0.5">
                                <div class="font-extrabold">
                                    {{ $formatter->format($plugin['author']['stats']['views']) }}
                                </div>
                                <div
                                    class="text-sm font-medium text-dolphin/80"
                                >
                                    Views
                                </div>
                            </div>

                            {{-- Stars --}}
                            <div class="space-y-0.5">
                                <div class="font-extrabold">
                                    {{ $formatter->format($plugin['author']['stats']['stars']) }}
                                </div>
                                <div
                                    class="text-sm font-medium text-dolphin/80"
                                >
                                    Stars
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
