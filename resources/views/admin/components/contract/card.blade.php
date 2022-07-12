<div class="card card-light">
    @php
        $ribbon = [
            1 => ['text' => 'Low', 'background' => 'low'],
            2 => ['text' => 'Medium', 'background' => 'medium'],
            3 => ['text' => 'High', 'background' => 'high'],
        ];

    @endphp
    <div class="card-body" style="min-height: 10rem">
        <div class="row mb-2">
            <div class="col-12">
                <div class="card-tools d-flex justify-content-between">

                    <div class="robbin robbin-{{ $ribbon[$contract->priority]['background'] ?? '' }}">
                        <span>{{ $ribbon[$contract->priority]['text'] }}</span>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-tool bg-button" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-h"></i>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @if ($type == 'draft')
                                @can('draftEdit', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="edit"
                                        name="{{ __('contract.dropdown.edit') }}" />
                                @endcan
                                @can('draftMoveToPending', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="pending"
                                        name="{{ __('contract.dropdown.move_pending') }}" />
                                @endcan
                            @endif

                            @if ($type == 'pending')
                                @can('pendingMoveToApprove', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="approve"
                                        name="{{ __('contract.dropdown.move_approve') }}" />
                                @endcan
                                @can('pendingMoveToDraff', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="draft"
                                        name="{{ __('contract.dropdown.move_draft') }}" />
                                @endcan
                            @endif

                            @if ($type == 'approve')
                                @can('approveMoveToDelivery', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="delivery"
                                        name="{{ __('contract.dropdown.move_delivery') }}" modal-active=true
                                        :data-contract="json_encode($contract)" />
                                @endcan
                            @endif

                            @if ($type == 'delivery')
                                @can('deliveryMoveToSign', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="sign"
                                        name="{{ __('contract.dropdown.move_signed') }}" />
                                @endcan
                                @can('deliveryMoveToPending', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="pending"
                                        name="Move To {{ __('contract.dropdown.move_pending') }}" />
                                @endcan
                                @can('deliveryMoveToCancel', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="cancel" name="Cancel" />
                                @endcan
                            @endif

                            @if ($type == 'sign')
                                @can('signMoveToArchive', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="archive"
                                        name="{{ __('contract.dropdown.move_archive') }}" sign=true :data-upload="json_encode($contract)" />
                                @endcan
                            @endif

                            @if ($type == 'cancel')
                                @can('cancelMoveToDraft', $contract)
                                    <x-contract.action :contract-id="$contract->id" action-type="draft"
                                        name="{{ __('contract.dropdown.move_draft') }}" />
                                @endcan
                            @endif

                            <x-contract.action :contract-id="$contract->id" action-type="contract"
                                name="{{ __('contract.dropdown.contract_detail') }}" />
                            {{-- <x-contract.action :contract-id="$contract->id" action-type="view" name="View" /> --}}
                            {{-- <x-contract.action :contract-id="$contract->id" action-type="cancel" name="Cancel" /> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h5 class="card-title col-12 my-2">{{ $contract->name }}</h5>
        </div>
        <div class="row">
            <div class="col-md-4">
                <span class="text-sm color-rgba">{{ __('contract.card.contract_id') }}</span>
            </div>
            <div class="col-md-6">
                <span>{{ $contract?->code }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <span class="text-sm color-rgba">{{ __('contract.card.contract_category') }}</span>
            </div>
            <div class="col-md-6">
                <span>{{ $contract?->templateFile?->template?->category->name }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <span class="text-sm color-rgba">{{ __('contract.card.customer_name') }}</span>
            </div>
            <div class="col-md-6">
                <span title="{{ $contract?->contractCustomer?->customer?->email }}"
                    class="cut-text">{{ $contract?->contractCustomer?->customer?->email }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <span class="text-sm color-rgba">{{ __('contract.card.created_by') }}</span>
            </div>
            <div class="col-md-6">
                <span>{{ $contract?->user()?->first()?->name }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <span class="text-sm color-rgba">{{ __('contract.card.approver') }}</span>
            </div>
            <div class="col-md-6">
                <span>{{ $assignee?->user?->name }}</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <span class="text-sm color-rgba">{{ __('contract.card.attach_file') }}</span>
            </div>
            <div class="col-md-6">
                <a href="{{ $contract?->link }}"
                    target="_blank"><i class="fas fa-paperclip"></i></a>
            </div>
        </div>
    </div>
</div>
