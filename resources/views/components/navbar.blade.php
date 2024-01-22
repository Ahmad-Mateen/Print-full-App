<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Lead Source</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Dashboard</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Orders</a>
                </li>
            </ul>

            <form class="d-flex">
                <form class="d-flex">
                    @if (request()->path() == '/')
                        <a href="https://www.printful.com/oauth/authorize?client_id={{env('PRINTFUL_CLIENT_ID')}}&state={stateValue}&redirect_url={{route('printfull-callback')}}" class="btn btn-primary print">Printful</a>
                        <a href="https://marketplace.gohighlevel.com/oauth/chooselocation?response_type=code&redirect_uri={{ route('crm-callback') }}&client_id={{ env('GHL_CLIENT_ID') }}&scope=locations.readonly contacts.readonly contacts.write locations/customValues.readonly locations/customValues.write locations/customFields.readonly locations/customFields.write users.write users.readonly"
                            class="btn btn-primary">CRM</a>

                            @endif
                </form>
            </form>
        </div>
    </div>
</nav>
