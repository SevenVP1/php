<!doctype html>
<html lang="en">
    <body>
      <form action="welcome_get.php" method="get">
        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-muted"></small>
        </div>
        
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="text"
                class="form-control"
                name="email"
                id=""
                aria-describedby="emailHelpId"
                placeholder="abc@mail.com"
            />
            <small id="emailHelpId" class="form-text text-muted"
                ></small
            >
        </div>
        
        
        <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>
        
    </body>
</html>
