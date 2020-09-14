<template>
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="login-box-body">
        <div class="login-logo">
            <img :src="$root.baseurl+'/public/assets/frontend/images/logo/bitm-logo.png'" alt=""><br>
            <h5>BASIS Institute of Technology & Management {BITM}</h5>
        </div>

      <slot v-if="!$root.spinner">
        <form v-on:submit.prevent="submit" method="post">
          <div
            class="form-group has-feedback"
            :class="{ 'has-error': validation.hasError('data.email'), 'has-success': data.email }"
          >
            <input type="email" v-model="data.email" class="form-control" placeholder="Email" />
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <span class="help-block">{{ validation.firstError('data.email') }}</span>
          </div>
          <div
            class="form-group has-feedback"
            :class="{ 'has-error': validation.hasError('data.password'), 'has-success': data.password }"
          >
            <input
              type="password"
              v-model="data.password"
              class="form-control"
              placeholder="Password"
            />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span class="help-block">{{ validation.firstError('data.password') }}</span>
          </div>
          <div class="row flex justify-content-center">
            <!-- /.col -->
            <div class="col-xs-4 flex justify-content-center">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </slot>
      <spinner v-if="$root.spinner" />
    </div>
    <!-- /.login-box-body -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      data: {
        email: "bitm@gmail.com",
        password: "123456"
      }
    };
  },
  methods: {
    submit() {
      const error = this.validation.countErrors();
      this.$validate().then(res => {
        if (res) {
          this.$root.spinner = true;
          axios
            .post("/loginme", this.data)
            .then(res => {
              if (res.status == 200) {
                Admin.login(res.data);
                this.notification(res.data.message, "success");
                window.location = this.$root.baseurl + "/admin/dashboard";
              } else {
                this.$root.spinner = false;
                this.notification(res.data.message, "error");
              }
            })
            .catch(error => console.log(error));
        }
      });
    }
  },
  created() {
    $(".body").removeClass("hold-transition skin-blue sidebar-mini");
    $(".body").addClass("hold-transition login-page");
  },

  // ================== validation rule for form ==================
  validators: {
    "data.email": function(value = null) {
      return Validator.value(value).required("Email is required");
    },
    "data.password": function(value = null) {
      return Validator.value(value)
        .required("Password is required")
        .minLength(6);
    }
  }
};
</script>

<style>

.login-page, .register-page {
    height: auto;
    background: #02335e;
}
.login-logo h5 {
    color: var(--gray-dark);
    text-shadow: 1px 1px 1px #4444;
    font-family: sans-serif;
    font-size: 20px;
    margin-top: 14px;
    padding: 0px;
    line-height: 29px;
}
.login-box-body, .register-box-body {
    background: #fff;
    padding: 20px;
    border-top: 0;
    color: #666;
    box-shadow: 0px 0px 23px 0px #000;
    border-radius: 0px;
    margin: -11px;
}
input.form-control {
    border: 0px;
    border-bottom: 1px solid #02335e;
    border-radius: 0px;
}
.btn-primary {
    color: #fff;
    background-color: #02335e;
    border-color: #02335e;
    padding: 5px 38px;
    margin-top: 13px;
    font-family: system-ui;
}
</style>
