@include('header/header')
<div class="container py-5 d-flex justify-content-center">
    <div class="row border shadow p-3 mb-5 bg-white rounded py-5">
        <div class="col-6">

            <img style="height:300px; width:300px; " src="https://images.unsplash.com/photo-1601606117154-813c2e6443c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=715&q=80">
        </div>
        <div class="col-sm-6">
            <form method="POST" action="http://localhost/admin">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <p class="pr-2">Don't have an Account?</p>
                    <a href="#">Register here</a>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <div class="col-6">
            </div>
        </div>
    </div>
</div>
@include('footer/footer')