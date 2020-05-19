{% extends "../templates/base.volt" %}

{% block content %}
  <div class="container">
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card">
          <div class="card-content black-text center-align row">
            <div class="col s12">
              <span class="card-title">Register</span>  
            </div>
            <form action="/register" method="post">
              <div class="input-field col s12">
                <input placeholder="Username" id="username" type="text" class="validate" name="username">
                <label for="username">Username</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Pasword..." id="password" type="password" class ="validate" name="password">
                <label for="password">Password</label>
              </div>
              <div class="input-field col s12">
                <input placeholder="Re-type Pasword..." id="password2" type="password" class ="validate" name="password2">
                <label for="password2">Retype Password</label>
              </div>
              <div class="col s12" >
                <!-- <a href="#" class="btn blue" type="submit" style="width:100%">Register</a> -->
                <button class="btn waves-effect waves-light blue" type="submit" name="action" style="width: 100%">Login
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </form>
          </div>
          <!-- <div class="card-action">
            <a href="#">This is a link</a>
          </div> -->
        </div>
      </div>
    </div>  
  </div>


{% endblock %}