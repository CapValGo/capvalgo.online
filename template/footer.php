        <footer class="footer fixed-bottom mt-auto py-3 bg-light">
          <div class="container align-middle">
            <div class="d-flex justify-content-between">
              <div>
                &copy; 2022 CapValGo.Online
              </div>
              <div>
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#donate"><i class="bi bi-cup"></i> Buy me a Coffee</button> through <a href="https://www.blockonomics.co/merchants?ref=ES3TGnXqWtQGJVydxG2YrQ8uXNCEbJ3t42asT" type="button" class="btn btn-secondary btn-sm">Blockonomics.co <i class="bi bi-balloon"></i></a>
                <a href="https://www.blockonomics.co/merchants?ref=ES3TGnXqWtQGJVydxG2YrQ8uXNCEbJ3t42asT"><img src="https://www.blockonomics.co/img/bitcoin_accepted.png"></a>
              </div>
            </div>
          </div>
        </footer>
        <!-- Modal -->
        <div class="modal fade" id="donate" tabindex="-1" aria-labelledby="donate" aria-hidden="true" data-bs-backdrop="static">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="donate">Donate to CapValGo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Bitcoin Address: <code>bc1q46e4ckw39e5jff3z98mvy8er05p9z06gdcd5mw</code></p>
                <div class="text-muted">
                  <p>Amount (Pounds)</p>
                  <div class="input-group mb-3">
                    <button type="button" class="btn btn-outline-secondary rb-tab" data-value="20" onclick="handleClick(this);">£20</button>
                    <button type="button" class="btn btn-outline-secondary rb-tab" data-value="50" onclick="handleClick(this);">£50</button>
                    <button type="button" class="btn btn-outline-secondary rb-tab" data-value="100" onclick="handleClick(this);">£100</button>
                    <input id="blockonomics_amount" type="number" name="amount" hidden="hidden">
                    <input id="other_amount" type="number" name="amount" placeholder="Other" class="form-control" onchange="handleChange(this);">
                  </div>
                  <label for="blockonomics_name" class="form-label">Name</label>
                  <input type="text" id="blockonomics_name" class="form-control" aria-describedby="nameHelpBlock" name="blockonomics_name" placeholder="Name">
                  <div id="nameHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </div>
                  <label for="blockonomics_email" class="form-label">Email</label>
                  <input type="email" id="blockonomics_email" class="form-control" aria-describedby="emailHelpBlock" name="blockonomics_email" placeholder="Email">
                  <div id="emailHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                  </div>
                  <hr>
                  <div id="blockonomics_widget"></div>
                  <br>
                  <div class="d-grid gap-2">
                    <button class="btn btn-primary" id="pay">Donate</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <script src="https://blockonomics.co/js/pay_widget.js"></script>
        <script type="text/javascript">
          document.getElementById('blockonomics_amount').value=20;
          function handleClick(button){
            console.log(button);
            document.getElementById('blockonomics_amount').value=button.dataset.value;
            document.getElementById('other_amount').value='';
            var tabs=document.getElementsByClassName("rb-tab");
            for(var i=0;i<tabs.length;i++){
              tabs[i].classList.remove("active");
            }
            button.classList.add("active");
          }
          function handleChange(other_amount){
            console.log(other_amount.value);document.getElementById('blockonomics_amount').value=other_amount.value;
            var tabs=document.getElementsByClassName("rb-tab");
            for(var i=0;i<tabs.length;i++){
              tabs[i].classList.remove("active");
            }
          }
          function pay(){
            Blockonomics.widget({
              msg_area:'blockonomics_widget',
              uid:'2d66b811577042c6',
              name:document.getElementById('blockonomics_name').value,
              email:document.getElementById('blockonomics_email').value,
              amount:document.getElementById('blockonomics_amount').value,
            });
          }
          document.getElementById('pay').onclick=function(){pay()};
        </script>