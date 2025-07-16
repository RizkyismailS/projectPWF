<a href="{{ route('userSetting') }}" class="inline-flex items-center mb-4 px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg font-semibold transition">
    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
    </svg>
    BACK
</a>
@vite(['resources/css/app.css', 'resources/js/app.js'])
<section class="bg-gray-50 w-full sm:p-5 sm:rounded-lg">
    <div class="w-full">
        <div class="w-full md:w-1/2">
            
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-4 py-3">Customer Name</th>
                    <th class="px-4 py-3">Order Code</th>
                    <th class="px-4 py-3">Total Price</th>
                    <th class="px-4 py-3">Order Date</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3 text-center">Validation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr data-order-id="{{ $order->id }}" class="border-b dark:border-gray-700 text-black font-semibold">
                   <td class="px-4 py-3">{{ $order->user->name ?? '-' }}</td>
                    <td class="px-4 py-3">{{ $order->order_code }}</td>
                    <td class="px-4 py-3">Rp{{ number_format($order->total_price, 0, ',', '.') }}</td>
                    <td class="px-4 py-3">{{ $order->created_at->format('d-m-Y') }}</td>
                    <td class="px-4 py-3">
                    <span class="status-badge px-2 py-1 rounded-full 
                        {{ $order->status === 'completed' ? 'bg-green-100 text-green-800' : 
                        ($order->status === 'pending' ? 'bg-yellow-100 text-yellow-800' : 
                        'bg-red-100 text-red-800') }}">
                        {{ ucfirst($order->status) }}
                    </span>

                    </td>
                    <td class="px-4 py-3">
                        <div class="flex justify-center gap-2">
                            <button onclick="validateOrder('{{ $order->id }}')" 
        class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">
    Validate
</button>

                        </div>

                        <!-- Modal -->
                        <div id="modal-{{ $order->id }}" 
                             class="fixed inset-0 z-50 flex items-center justify-center bg-black/30 backdrop-blur-sm hidden">
                            <div class="relative bg-white w-full max-w-md p-6 rounded-2xl shadow-2xl mx-4 animate-fade-in">
                                <!-- Header -->
                                <div class="text-center mb-4">
                                    <h2 class="text-2xl font-semibold text-gray-800">Order Validation</h2>
                                    <div class="w-16 h-1 mx-auto bg-blue-500 rounded my-2"></div>
                                </div>

                                <!-- Info Order -->
                                <div class="text-gray-700 space-y-2 text-sm">
                                    <div class="flex justify-between">
                                        <span class="font-medium">Customer Name</span>
                                        <span>{{ $order->user->name ?? '-' }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Order Code</span>
                                        <span>{{ $order->order_code }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Total Price</span>
                                        <span>Rp{{ number_format($order->total_price, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Order Date</span>
                                        <span>{{ $order->created_at->format('d-m-Y') }}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="font-medium">Current Status</span>
                                        <span>{{ ucfirst($order->status) }}</span>
                                    </div>
                                </div>

                                <!-- Validation Form -->
                                <form id="validation-form-{{ $order->id }}" class="mt-4">
                                    <div class="mb-4">
                                    
                                    <input type="hidden" id="validation-order-id-{{ $order->id }}" value="{{ $order->id }}">
                                        
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-700 text-sm font-bold mb-2" for="validation-notes">
                                            Notes
                                        </label>
                                        <textarea id="validation-notes-{{ $order->id }}" 
                                                  class="block w-full bg-gray-100 border border-gray-300 rounded py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                                  rows="3"></textarea>
                                    </div>
                                </form>

                                <!-- Action Buttons -->
                                <div class="mt-6 flex justify-between">
                                    <button onclick="closeModal('{{ $order->id }}')" 
                                            class="px-5 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition">
                                        Cancel
                                    </button>
                                    <button onclick="submitValidation('{{ $order->id }}')" 
                                            class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                                        Submit Validation
                                    </button>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0 p-4" aria-label="Table navigation">
        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
    Showing
    <span class="font-semibold text-gray-500">{{ $orders->firstItem() }}-{{ $orders->lastItem() }}</span>
    of
    <span class="font-semibold text-gray-500">{{ $orders->total() }}</span>
</span>

        <ul class="inline-flex items-stretch -space-x-px">
            {{-- Previous Page --}}
            <li>
                <a href="{{ $orders->previousPageUrl() ?? '#' }}"
                   class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                   @if (!$orders->onFirstPage()) rel="prev" @endif>
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </li>

            {{-- Page Numbers --}}
            @foreach ($orders->getUrlRange(1, $orders->lastPage()) as $page => $url)
                @if ($page == $orders->currentPage())
                    <li>
                        <a href="#" aria-current="page"
                           class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-primary-600 bg-primary-50 border border-primary-300 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">
                            {{ $page }}
                        </a>
                    </li>
                @elseif ($page == 1 || $page == $orders->lastPage() || abs($page - $orders->currentPage()) <= 1)
                    <li>
                        <a href="{{ $url }}"
                           class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            {{ $page }}
                        </a>
                    </li>
                @elseif ($page == $orders->currentPage() - 2 || $page == $orders->currentPage() + 2)
                    <li>
                        <a href="#"
                           class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
                            ...
                        </a>
                    </li>
                @endif
            @endforeach

            {{-- Next Page --}}
            <li>
                <a href="{{ $orders->nextPageUrl() ?? '#' }}"
                   class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white"
                   @if ($orders->hasMorePages()) rel="next" @endif>
                    <span class="sr-only">Next</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </a>
            </li>
        </ul>
    </nav>
</section>

<script>
   
</script>
