<!doctype html>
<html lang="en">
    <body>
    <form action="novell.php" method="post">
        <h1 style="text-align: center">web1</h1>
        <div class="mb-3">
            <label for="" class="form-label">Username</label>
            <input
                type="text"
                class="form-control"
                name="username"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <div class="mb-3">
                <label for="" class="form-label">Password</label>
                <input
                    type="password"
                    class="form-control"
                    name="pass"
                    id=""
                    placeholder=""
                />
            </div>
            
                <div class="mb-3">
                    <label for="" class="form-label">City of Employment</label>
                    <input
                        type="text"
                        class="form-control"
                        name="city"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                    <small id="helpId" class="form-text text-muted"></small>
            <div class="mb-3">
                <label for="" class="form-label">Web server</label>
                <select
                    class="form-select form-select-lg"
                    name="web"
                    id=""
                >
                    <option selected>Choose a website</option>
                    <option value="sever1">sv1</option>
                    <option value="sever2">sv2</option>
                    <option value="sever3">sv3</option>
                </select>
                <div
                    class="btn-group"
                    role="group"
                    aria-label="Basic checkbox toggle button group"
                    
                >
            
                <label>Please specify your role</label>
                    <input
                        type="radio"
                        class="btn-check"
                        name="role"
                        id="btncheck1"
                        autocomplete="off"
                        value="Admin"
                    />
                    <label
                        class="btn btn-outline-primary"
                        for="btncheck1"
                        >Admin</label
                    >
                
                    <input
                        type="radio"
                        class="btn-check"
                        name="role"
                        id="btncheck2"
                        autocomplete="off"
                        value="Engineer"
                    />
                    <label
                        class="btn btn-outline-primary"
                        for="btncheck2"
                        >Engineer</label
                    >
                
                    <input
                        type="radio"
                        class="btn-check"
                        name="role"
                        id="btncheck3"
                        autocomplete="off"
                        value="Maganer"
                    />
                    <label
                        class="btn btn-outline-primary"
                        for="btncheck3"
                        >Maganer</label
                    >
                    <input
                        type="radio"
                        class="btn-check"
                        name="role"
                        id="btncheck3"
                        autocomplete="off"
                        value="Guest"
                    />
                    <label
                        class="btn btn-outline-primary"
                        for="btncheck3"
                        >Guest</label
                    >
                </div>
                <div class="list-group">
                    <label>Sigle sign-on to the following</label>
                    <label class="list-group-item">
                        <input class="form-check-input me-1" name = "sign[]" type="checkbox" value="Mail" />
                        Mail
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-1" name = "sign[]" type="checkbox" value="Payroll" />
                        Payroll
                    </label>
                    <label class="list-group-item">
                        <input class="form-check-input me-1" name = "sign[]"  type="checkbox" value="Self service" />
                        Sefl service
                    </label>
                    
                
                </div>
                
                
                
                    <button
                        type="Login"
                        class="btn btn-primary"
                    >
                        Login
                    </button>
                    <button
                        type="reset"
                        class="btn btn-primary"
                    >
                        Reset
                    </button>
                    
                </div>

                
                
            </div>
            

                </div>
                
            </div>
            
        </div>
        
    </body>
</html>
