<div class="col-lg-12">
    <div class="card">
        <div class="card-header align-items-center d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Edit Tournament</h4>
        </div><!-- end card header -->

        <div class="card-body">
            <div class="live-preview">
                <form class="row g-3 needs-validation" novalidate
                    action="{{ route('tournaments.update', $tournament->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="col-md-6">
                        <div class="form-label-group in-border">
                            <input type="text"
                                class="form-control @if ($errors->has('name')) is-invalid @endif" id="statusName"
                                name="name" placeholder="Please enter" value="{{ $tournament->name }}" required>
                            <label for="statusName" class="form-label fs-5 fs-lg-1">Name</label>
                            <div class="invalid-tooltip">
                                @if ($errors->has('name'))
                                    {{ $errors->first('name') }}
                                @else
                                    Name is required!
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group in-border">
                            <select class="form-select form-control mb-3" name="published" required>
                                <option value="" @if ($tournament->published == '') {{ 'selected' }} @endif
                                    selected disabled>
                                    Select One
                                </option>
                                <option value="1" @if ($tournament->published == '1') {{ 'selected' }} @endif>
                                    Yes
                                </option>
                                <option value="0" @if ($tournament->published == '0') {{ 'selected' }} @endif>
                                    No
                                </option>
                            </select>
                            <label for="published" class="form-label fs-5 fs-lg-1">Published</label>
                            <div class="invalid-tooltip">
                                @if ($errors->has('published'))
                                    {{ $errors->first('published') }}
                                @else
                                    Published is required!
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-label-group in-border">
                            <input type="date" name="start_date" value="{{ $tournament->start_date }}"
                                class="form-control mb-3 @if ($errors->has('start_date')) is-invalid @endif">
                            <label for="start_date" class="form-label">Start Date</label>
                            <div class="invalid-tooltip">
                                @if ($errors->has('start_date'))
                                    {{ $errors->first('start_date') }}
                                @else
                                    Start Date is required!
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-label-group in-border">
                            <input type="date" name="end_date" value="{{ $tournament->end_date }}"
                                class="form-control mb-3 @if ($errors->has('end_date')) is-invalid @endif">
                            <label for="end_date" class="form-label">End Date</label>
                            <div class="invalid-tooltip">
                                @if ($errors->has('end_date'))
                                    {{ $errors->first('end_date') }}
                                @else
                                    End Date is required!
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-label-group in-border">
                            <input type="number"
                                class="form-control @if ($errors->has('number_of_request')) is-invalid @endif"
                                id="number_of_request" name="number_of_request" placeholder="Please enter"
                                value="{{ $tournament->number_of_request }}" required>
                            <label for="number_of_request" class="form-label fs-5 fs-lg-1">Number of Request</label>
                            <div class="invalid-tooltip">
                                @if ($errors->has('number_of_request'))
                                    {{ $errors->first('number_of_request') }}
                                @else
                                    Number of Request is required!
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-label-group in-border">
                            <div class="input-group">
                                <input type="number"
                                    class="form-control @if ($errors->has('registration_fee')) is-invalid @endif"
                                    id="registration_fee" name="registration_fee" placeholder="Please enter"
                                    value="{{ $tournament->registration_fee }}">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">USD</span>
                                </div>
                                <label for="registration_fee" class="form-label">Registration Fee</label>
                            </div>
                            <div class="invalid-tooltip">
                                @if ($errors->has('registration_fee'))
                                    {{ $errors->first('registration_fee') }}
                                @else
                                    Registration Fee is empty or incorrect!
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-label-group in-border">
                            <select class="form-select form-control mb-3" name="status_id" required>
                                <option value="" @if ($tournament->status_id == '') {{ 'selected' }} @endif
                                    selected disabled>
                                    Select One
                                </option>
                                @foreach ($statuses as $status)
                                    <option value="{{ $status->id }}"
                                        @if ($tournament->status_id == $status->id) {{ 'selected' }} @endif>
                                        {{ $status->name }}
                                    </option>
                                @endforeach
                            </select>
                            <label for="status" class="form-label fs-5 fs-lg-1">Status</label>
                            <div class="invalid-tooltip">
                                @if ($errors->has('status_id'))
                                    {{ $errors->first('status_id') }}
                                @else
                                    PLease select any Status!
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 mb-3">
                        <div id="snow-editor" style="height: 300px;">{!! $tournament->terms_and_condition !!}</div>
                        <input type="hidden" name="terms_and_condition" id="terms_and_condition">
                    </div>
                    <div class="col-12 text-end">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                        <a href="{{ route('tournaments.index') }}"
                            class="btn btn-light bg-gradient waves-effect waves-light">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
