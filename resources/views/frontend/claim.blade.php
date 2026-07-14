@extends("layouts.app")

@section("content")

    <!-- Banner -->
    <div class="single-page pt-5">
        <div class="container text-center pt-5">
            <h1 class="mt-4">Upload your documents</h1>
            <p class="col-lg-6 text-white mx-auto" style="opacity: 0.8;">Already working with us on your claim? Send over any documents, photos or paperwork
                here. No login, no hassle. Just upload and we'll take it from there.</p>
        </div>
    </div>

    <!-- Claim Form Section -->
    <section class="contact-area nch-section pt-4 pb-5">
        <div class="container">
            <div class="nch-sec-head">
                <div class="nch-sec-head-l">
                    <h2>Send your documents</h2>
                    <p>Add as many files as you need. We accept photos, PDFs and scanned documents.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="">

                    <div class="form-container-box mb-4">
                        <form class="claim-form form" id="ajax-claim" method="post" action="{{ route('saveClaim') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="controls">
                                <div id="claim-form-alert"></div>

                                <!-- File Upload Area -->
                                <div class="form-group">
                                    <label class="form-label" for="files">Your documents <span class="text-danger">*</span></label>
                                    <div class="upload-drop-zone">
                                        <div class="upload-drop-zone__icon">
                                            <i class="fa fa-upload"></i>
                                        </div>
                                        <p class="upload-drop-zone__text mb-1"><strong id="upload-text">Drag files here, or click to browse</strong></p>
                                        <p class="upload-drop-zone__hint mb-0">Accepted: <strong>JPG, PNG, PDF</strong> — up to 20MB each</p>
                                        <input type="file" name="files[]" id="files" multiple required accept=".jpg,.jpeg,.png,.pdf,image/jpeg,image/png,application/pdf" class="upload-drop-zone__input">
                                        <div class="help-block with-errors">{{ $errors->first('files') }}</div>
                                    </div>
                                    <div id="file-list-container" class="mt-3"></div>
                                </div>

                                <!-- Document Type Checkboxes -->
                                <div class="form-group">
                                    <label class="form-label">What type of documents are these? <span class="text-danger">*</span></label>
                                    <div class="row">
                                        @php
                                        $docTypes = [
                                            'Vehicle damage photos',
                                            'Police report',
                                            'Driving licence / ID',
                                            'Insurance details',
                                            'Insurer correspondence',
                                            'Repair estimate / invoice',
                                            'Other'
                                        ];
                                        @endphp

                                        @foreach($docTypes as $index => $type)
                                        <div class="col-md-4 col-sm-6 mb-3">
                                            <div class="custom-control custom-checkbox claim-doc-checkbox">
                                                <input type="checkbox" class="custom-control-input doc-type-checkbox" id="docType{{ $index }}" name="document_types[]" value="{{ $type }}" data-type="{{ $type }}">
                                                <label class="custom-control-label" for="docType{{ $index }}">{{ $type }}</label>
                                            </div>
                                            @if($type === 'Other')
                                            <div id="otherDocTypeContainer" class="claim-other-doc-type form-group" style="display: none;">
                                                <input type="text" class="form-control" id="otherDocTypeInput" name="other_document_type" value="{{ old('other_document_type') }}" placeholder="Tell us what this is">
                                                <div class="help-block with-errors">{{ $errors->first('other_document_type') }}</div>
                                            </div>
                                            @endif
                                        </div>
                                        @endforeach
                                    </div>
                                    <div id="documentTypesError" class="help-block with-errors">{{ $errors->first('document_types') }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Full name <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                value="{{ old('name') }}" placeholder="Jane Smith" required="required"
                                                data-error="Full name is required.">
                                            <div class="help-block with-errors">{{ $errors->first('name') }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone">Phone number <span class="text-danger">*</span></label>
                                            <input type="number" class="form-control" id="phone" name="phone"
                                                value="{{ old('phone') }}" placeholder="07XXX XXXXXX" required="required"
                                                data-error="Phone number is required.">
                                            <div class="help-block with-errors">{{ $errors->first('phone') }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email address <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                value="{{ old('email') }}" placeholder="jane@example.com" required="required"
                                                data-error="valid email is required.">
                                            <div class="help-block with-errors">{{ $errors->first('email') }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="car_reg_no">Vehicle registration <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control text-uppercase" id="car_reg_no" name="car_reg_no"
                                                value="{{ old('car_reg_no') }}" placeholder="e.g. AB12 CDE" required="required"
                                                data-error="Vehicle registration is required.">
                                            <div class="help-block with-errors">{{ $errors->first('car_reg_no') }}</div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label class="form-label" for="notes">Anything we should know? <span class="form-label-optional">(optional)</span></label>
                                            <textarea class="form-control" id="notes" name="notes" rows="6"
                                                placeholder="Add any extra details about these documents">{{ old('notes') }}</textarea>
                                            <div class="help-block with-errors">{{ $errors->first('notes') }}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-red" id="claim-submit-btn" data-text="Send Documents">Send documents <i class="fa fa-long-arrow-right"></i></button>
                                        <p class="text-muted small mt-2 mb-0">We'll match these to your claim using your name and phone number.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    <!-- Info Section -->
                    <div class="card shadow-sm border-0 mb-4 rounded-4" style="background-color: #ffffff;">
                        <div class="card-body p-5">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="mb-4 font-weight-bold">What to upload</h4>
                                    <ul class="list-unstyled" style="line-height: 2.2;">
                                        <li><span class="text-danger mr-2">•</span> Photos of the damage to your vehicle
                                        </li>
                                        <li><span class="text-danger mr-2">•</span> Police reports or crime reference
                                            numbers</li>
                                        <li><span class="text-danger mr-2">•</span> Driving licence and proof of ID</li>
                                        <li><span class="text-danger mr-2">•</span> Insurance details</li>
                                        <li><span class="text-danger mr-2">•</span> Correspondence from the other party's
                                            insurer</li>
                                        <li><span class="text-danger mr-2">•</span> Repair estimates or invoices</li>
                                        <li><span class="text-danger mr-2">•</span> Any other paperwork related to your
                                            claim</li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <h4 class="mb-4 font-weight-bold">How it works</h4>
                                    <div class="d-flex mb-4">
                                        <div class="mr-3">
                                            <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center"
                                                style="width: 25px; height: 25px; font-size: 0.8rem;">1</div>
                                        </div>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">Upload your files</h6>
                                            <p class="text-muted small mb-0">Add your documents and a few contact details so
                                                we know whose claim they belong to.</p>
                                        </div>
                                    </div>
                                    <div class="d-flex">
                                        <div class="mr-3">
                                            <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center"
                                                style="width: 25px; height: 25px; font-size: 0.8rem;">2</div>
                                        </div>
                                        <div>
                                            <h6 class="font-weight-bold mb-1">We take it from here</h6>
                                            <p class="text-muted small mb-0">Your documents go straight to your case
                                                handler. No further action needed on your part.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Banner -->
                    <div class="card border-0 rounded-4" style="background-color: #1a1a1a; color: white;">
                        <div class="card-body p-4 d-flex align-items-center">
                            <div class="mr-3 text-danger border border-danger rounded-circle d-flex align-items-center justify-content-center"
                                style="width: 40px; height: 40px; min-width: 40px;">
                                <i class="fa fa-lock"></i>
                            </div>
                            <div>
                                <h6 class="mb-1 text-white font-weight-bold">Your documents are safe with us</h6>
                                <p class="mb-0 text-muted small" style="color: #999 !important;">Everything you upload is
                                    handled securely and used only for the purposes of managing your claim.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    <script>
        const claimForm = document.getElementById('ajax-claim');
        const claimAlert = document.getElementById('claim-form-alert');
        const claimSubmitBtn = document.getElementById('claim-submit-btn');
        const fileInput = document.getElementById('files');
        const fileListContainer = document.getElementById('file-list-container');
        const uploadText = document.getElementById('upload-text');
        const allowedExtensions = ['jpg', 'jpeg', 'png', 'pdf'];
        const otherDocTypeContainer = document.getElementById('otherDocTypeContainer');
        const otherDocTypeInput = document.getElementById('otherDocTypeInput');

        // Persistent list of chosen files so each new selection ADDS to the
        // previous ones instead of replacing them (a file input otherwise
        // overwrites its .files with only the latest selection).
        let selectedFiles = [];

        // Push our accumulated list back onto the input so it submits with the form.
        function syncInputFiles() {
            const dt = new DataTransfer();
            selectedFiles.forEach(function (file) {
                dt.items.add(file);
            });
            fileInput.files = dt.files;
        }

        function showClaimAlert(type, message) {
            claimAlert.innerHTML =
                '<div class="alert alert-' + type + ' alert-dismissable" role="alert">' +
                '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' +
                message +
                '</div>';
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }

        function clearClaimErrors() {
            claimForm.querySelectorAll('.help-block.with-errors').forEach(function (el) {
                el.textContent = '';
            });
            claimForm.querySelectorAll('.has-error').forEach(function (el) {
                el.classList.remove('has-error');
            });
        }

        function showClaimErrors(errors) {
            Object.keys(errors).forEach(function (field) {
                const input = claimForm.querySelector('[name="' + field + '"], [name="' + field + '[]"]');
                if (!input) {
                    return;
                }

                const group = input.closest('.form-group');
                if (!group) {
                    return;
                }

                group.classList.add('has-error');
                const help = group.querySelector('.help-block.with-errors');
                if (help) {
                    help.textContent = errors[field][0];
                }
            });
        }

        function resetClaimForm() {
            claimForm.reset();
            selectedFiles = [];
            syncInputFiles();
            fileListContainer.innerHTML = '';
            uploadText.innerHTML = 'Drag files here, or click to browse';
            otherDocTypeContainer.style.display = 'none';
            otherDocTypeInput.value = '';
            clearClaimErrors();
        }

        $('#ajax-claim').validator();

        function validateDocTypes() {
            const docTypeGroup = document.getElementById('docType0').closest('.form-group');
            const docHelp = document.getElementById('documentTypesError');
            const anyDocTypeChecked = claimForm.querySelectorAll('.doc-type-checkbox:checked').length > 0;

            if (!anyDocTypeChecked) {
                docTypeGroup.classList.add('has-error');
                if (docHelp) docHelp.textContent = 'Please select at least one document type.';
            } else {
                docTypeGroup.classList.remove('has-error');
                if (docHelp) docHelp.textContent = '';
            }

            return anyDocTypeChecked && validateOtherDocType();
        }

        function validateOtherDocType() {
            const otherCheckbox = document.querySelector('.doc-type-checkbox[data-type="Other"]');
            const otherHelp = otherDocTypeContainer.querySelector('.help-block.with-errors');

            if (otherCheckbox && otherCheckbox.checked && otherDocTypeInput.value.trim() === '') {
                otherDocTypeContainer.classList.add('has-error');
                if (otherHelp) otherHelp.textContent = 'Please tell us what this document is.';
                return false;
            }

            otherDocTypeContainer.classList.remove('has-error');
            if (otherHelp) otherHelp.textContent = '';
            return true;
        }

        $('#ajax-claim').on('submit', function (e) {
            // Validate document types first, so the message shows even when
            // bootstrap-validator has already blocked the other fields.
            const docTypesValid = validateDocTypes();

            if (e.isDefaultPrevented()) {
                return;
            }

            e.preventDefault();

            if (!docTypesValid) {
                return;
            }

            clearClaimErrors();
            claimAlert.innerHTML = '';

            const formData = new FormData(this);
            const defaultBtnHtml = claimSubmitBtn.innerHTML;

            claimSubmitBtn.disabled = true;
            claimSubmitBtn.innerHTML = 'Sending...';

            fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                },
            })
                .then(function (response) {
                    return response.json().then(function (data) {
                        return { ok: response.ok, status: response.status, data: data };
                    });
                })
                .then(function (result) {
                    if (result.ok && result.data.success) {
                        showClaimAlert('success', result.data.message);
                        resetClaimForm();
                        return;
                    }

                    if (result.status === 422 && result.data.errors) {
                        showClaimAlert('danger', result.data.message || 'Please check the form — some details need fixing.');
                        showClaimErrors(result.data.errors);
                        return;
                    }

                    showClaimAlert('danger', result.data.message || 'Something went wrong! Please try again.');
                })
                .catch(function () {
                    showClaimAlert('danger', 'Something went wrong! Please try again.');
                })
                .finally(function () {
                    claimSubmitBtn.disabled = false;
                    claimSubmitBtn.innerHTML = defaultBtnHtml;
                });
        });

        fileInput.addEventListener('change', function (e) {
            let hasInvalidFiles = false;

            // Append the newly picked files to what we already have.
            Array.from(fileInput.files).forEach(file => {
                const ext = file.name.split('.').pop().toLowerCase();

                if (!allowedExtensions.includes(ext)) {
                    hasInvalidFiles = true;
                    return;
                }

                // Skip files that are already in the list (same name/size/date).
                const alreadyAdded = selectedFiles.some(function (f) {
                    return f.name === file.name && f.size === file.size && f.lastModified === file.lastModified;
                });

                if (!alreadyAdded) {
                    selectedFiles.push(file);
                }
            });

            syncInputFiles();

            if (hasInvalidFiles) {
                alert("Only JPG, PNG, and PDF files are allowed. Invalid files were removed.");
            }

            updateFileList();
        });

        function updateFileList() {
            fileListContainer.innerHTML = '';
            const files = fileInput.files;

            if (files.length > 0) {
                uploadText.innerHTML = '<span class="text-success"><i class="fa fa-check-circle mr-1"></i> ' + files.length + ' file(s) selected</span>';

                const listGroup = document.createElement('ul');
                listGroup.className = 'list-group shadow-sm';

                Array.from(files).forEach((file, index) => {
                    const li = document.createElement('li');
                    li.className = 'list-group-item py-2';
                    li.style.display = 'block';
                    li.style.overflow = 'hidden';

                    const fileName = document.createElement('span');
                    fileName.textContent = file.name;
                    fileName.style.display = 'inline-block';
                    fileName.style.maxWidth = '85%';
                    fileName.style.textOverflow = 'ellipsis';
                    fileName.style.whiteSpace = 'nowrap';
                    fileName.style.overflow = 'hidden';
                    fileName.style.verticalAlign = 'middle';

                    const removeBtn = document.createElement('button');
                    removeBtn.type = 'button';
                    removeBtn.className = 'btn btn-sm btn-danger rounded-pill px-3';
                    removeBtn.style.float = 'right';
                    removeBtn.innerHTML = '<i class="fa fa-times mr-1"></i>Remove';
                    removeBtn.title = 'Remove file';
                    removeBtn.onclick = function () {
                        removeFile(index);
                    };

                    li.appendChild(removeBtn);
                    li.appendChild(fileName);
                    listGroup.appendChild(li);
                });

                fileListContainer.appendChild(listGroup);
            } else {
                uploadText.innerHTML = 'Drag files here, or click to browse';
            }
        }

        function removeFile(indexToRemove) {
            selectedFiles.splice(indexToRemove, 1);
            syncInputFiles();
            updateFileList(); // Re-render list
        }

        // Document Types logic
        const docTypeCheckboxes = document.querySelectorAll('.doc-type-checkbox');
        
        docTypeCheckboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', function() {
                if (claimForm.querySelectorAll('.doc-type-checkbox:checked').length > 0) {
                    const group = document.getElementById('docType0').closest('.form-group');
                    group.classList.remove('has-error');
                    const help = document.getElementById('documentTypesError');
                    if (help) help.textContent = '';
                }

                if (this.dataset.type === 'Other') {
                    if (this.checked) {
                        otherDocTypeContainer.style.display = 'block';
                        otherDocTypeInput.focus();
                    } else {
                        otherDocTypeContainer.style.display = 'none';
                        otherDocTypeInput.value = ''; // clear input
                        otherDocTypeContainer.classList.remove('has-error');
                        const otherHelp = otherDocTypeContainer.querySelector('.help-block.with-errors');
                        if (otherHelp) otherHelp.textContent = '';
                    }
                }
            });
        });

        otherDocTypeInput.addEventListener('input', function () {
            if (this.value.trim() !== '') {
                otherDocTypeContainer.classList.remove('has-error');
                const otherHelp = otherDocTypeContainer.querySelector('.help-block.with-errors');
                if (otherHelp) otherHelp.textContent = '';
            }
        });
    </script>
@endsection