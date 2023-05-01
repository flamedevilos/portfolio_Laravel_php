@extends('layouts.app')
@section('title', 'Portfolio~Contact')

@section('content')

    <div class="contact-title">
        <h1>Contact</h1>
        <p>~Get in Touch~</p>
    </div>
    <br>

    <section class="contact">
        <form action="" method="">

        <div class="note">The field with * is required</div>
        <br>

        <div>
            <label><i class="uil uil-building"></i>Company Name</label>
            <input type="text"  placeholder="Company Name GmbH">
        </div>
        <div>
            <label><i class="uil uil-location-pin-alt"></i> Company Address</label>
            <input type="text"  placeholder="Company Address GmbH">
        </div>
        <br>

        <div>
            <select class="select">
                <option selected><i class="uil uil-file-import"></i> Title*</option>
                <option value="1">Mr.</option>
                <option value="2">Mrs.</option>
                <option value="3">Ms.</option>
                <option value="4">Mss.</option>
            </select>
        </div>
        <br>

        <div>
            <label><i class="uil uil-user"></i> Name*</label>
            <input type="text" placeholder="Name">
        </div>
        <br>

        <div>
            <label><i class="uil uil-envelope-edit"></i> Email*</label>
            <input type="email" placeholder="name@example.com">
        </div>
        <br>

        <div>
            <label><i class="uil uil-phone"></i> Phone</label>
            <input type="text" placeholder="phone number">
        </div>
        <br>

        <div>
            <label><i class="uil uil-edit"></i> Subject*</label>
            <input type="text" placeholder="about...">
        </div>
        <br>
        <div>
            <label><i class="uil uil-edit-alt"></i> Message*</label>
            <textarea rows="5" placeholder="Message..."></textarea>
        </div>
        <br>

        <div class="upload">
            <label><i class="uil uil-file-import"></i> File Upload</label> <br>
            <button type="file">Upload File <i class="uil uil-file-import"></i></button>
        </div>
        <br>

        <button type="submit">Send <i class="uil uil-location-arrow"></i></button>
        <br><br>

        <div class="note">The field with * is required</div>

    </form>
</section>



@endsection
