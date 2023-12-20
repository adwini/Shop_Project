<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>ADMIN</title>
</head>
<body>
<div class="hero min-h-screen  bg-base-200">
  <div class="hero-content flex-col lg:flex-row align-items-center ">
    <!-- <div class="text-center lg:text-left">
      <h1 class="text-1xl font-bold">Login now!</h1>
      <p class="py-6"></p>
    </div> -->
    <div class="card shrink-0 w-full shadow-2xl bg-base-100">
      <form class="card-body w-96 ">
     
        <div class="form-control">
          <label class="label">
            <span class="label-text">Employee ID</span>
          </label>
          <input type="empId" placeholder="Employee ID" class="input input-bordered" required />
        </div>

        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" placeholder="Password" class="input input-bordered" required />
          
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary">Login</button>
        </div>
      </form>
    </div>
  </div>
  </div>
</div>
</body>
</html>