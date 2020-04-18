<style>
    #cookieWrapper{
        position: fixed;
        bottom: 0;
        width: 100%;
        z-index: 100;
        margin: 0;
        border-radius: 0;
    }
</style>

<div id="cookieWrapper" class="bg-dark text-white w-100 py-3 text-center">
<div class="js-cookie-consent d-inline  cookie-consent">

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button onclick="$('#cookieWrapper').remove()" class="js-cookie-consent-agree text-dark btn btn-light cookie-consent__agree">
        {{ trans('cookieConsent::texts.agree') }}
    </button>
    <div class="modal fade" id="cookieModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="notice justify-content-between align-items-center">
                        <div class="cookie-consent__message text-secondary">
                            {!! trans('cookieConsent::texts.message') !!}
                        </div>
                        <div class="buttons mt-3">
                            <button class="js-cookie-consent-agree btn btn-success cookie-consent__agree" data-dismiss="modal" aria-label="close">
                                {{ trans('cookieConsent::texts.agree') }}
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@push('after-scripts')
    <script>
        $(document).ready(function() {
            if(!(document.cookie.split('; ').indexOf('{{ config('cookie-consent.cookie_name') }}' + '=' + 1) !== -1)){
                $('#cookieModal').modal('show');
            }
        });
        $('#cookieModal').on('hidden.bs.modal', function (e) {
            $('#cookieWrapper').remove();

        })
    </script>
@endpush