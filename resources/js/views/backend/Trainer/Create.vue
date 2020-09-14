<template>
  <div>
    <div class="box box-success" v-if="!$root.spinner">
      <div class="box-header with-border">
        <h3 class="box-title">{{ model + " Create" }}</h3>

        <!--============ Add or Back Button Start ============-->
        <AddOrBackButton :route="model +'.index'" :portion="model" :icon="'arrow-left'" />
        <!--============ Add or Back Button End ============-->
      </div>

      <div class="box-body box-min-height">
        <!--============ Form Start ============-->
        <div class="row">
          <form
            v-on:submit.prevent="submit"
            enctype="multipart/form-data"
            id="form"
            class="form-row col-12"
          >
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Name</label>
              <input
                type="text"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Name"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Designation</label>
              <input
                type="text"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Designation"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Academic Degree</label>
              <input
                type="text"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Academic Degree"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Date of birth</label>
              <b-form-datepicker
                id="datepicker-sm"
                size="sm"
                v-model="data.date"
                :date-format-options="{ year: 'numeric', month: 'short', day: '2-digit', weekday: 'short' }"
                class="col-12 no-padding"
              ></b-form-datepicker>
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div class="form-group col-2">
              <label>Gender</label>
              <div class="row col-12">
                <b-form-checkbox
                  class="col-form-label-sm col-6"
                  v-model="data.gender"
                  name="gender"
                  :value="4"
                  :unchecked-value="null"
                >Male</b-form-checkbox>
                <b-form-checkbox
                  class="col-form-label-sm col-6"
                  v-model="data.gender"
                  name="gender"
                  :value="3"
                  :unchecked-value="null"
                >Female</b-form-checkbox>
              </div>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Mobile</label>
              <input
                type="text"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Mobile"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Email</label>
              <input
                type="email"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Email"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <div class="w-100"></div>
            <fieldset class="w-100 border border-info mb-2">
              <legend class="w-25 border border-info text-center" style="font-size:15px">Social Link</legend>
              <div class="row col-12">
                <!------------ Single Input ------------>
                <div
                  class="form-group col-3"
                  :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
                >
                  <label>FB URL</label>
                  <input
                    type="url"
                    v-model="data.name"
                    name="name"
                    class="form-control form-control-sm"
                    placeholder="FB URL"
                  />
                  <span class="help-block">{{ validation.firstError('data.name') }}</span>
                </div>
                <!------------ Single Input ------------>
                <div
                  class="form-group col-3"
                  :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
                >
                  <label>Linkedin URL</label>
                  <input
                    type="url"
                    v-model="data.name"
                    name="name"
                    class="form-control form-control-sm"
                    placeholder="Linkedin URL"
                  />
                  <span class="help-block">{{ validation.firstError('data.name') }}</span>
                </div>
                <!------------ Single Input ------------>
                <div
                  class="form-group col-3"
                  :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
                >
                  <label>Google URL</label>
                  <input
                    type="url"
                    v-model="data.name"
                    name="name"
                    class="form-control form-control-sm"
                    placeholder="Linkedin URL"
                  />
                  <span class="help-block">{{ validation.firstError('data.name') }}</span>
                </div>
                <!------------ Single Input ------------>
                <div
                  class="form-group col-3"
                  :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
                >
                  <label>Website URL</label>
                  <input
                    type="url"
                    v-model="data.name"
                    name="name"
                    class="form-control form-control-sm"
                    placeholder="Website URL"
                  />
                  <span class="help-block">{{ validation.firstError('data.name') }}</span>
                </div>
              </div>
            </fieldset>

            <!------------ Single Input ------------>
            <div
              class="form-group col-12"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Biography</label>
              <textarea class="form-control" placeholder="Biography" rows="3"></textarea>
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3 mt-5"
              :class="{ 'has-error': validation.hasError('data.profile'), 'has-success': data.profile }"
            >
              <label>Image</label>
              <div class="row">
                <div class="col-2">
                  <img
                    class="img-responsive rounded-circle choose-file-size"
                    :src="data.profile?data.profile:$root.noimage"
                    alt="picture"
                  />
                </div>
                <div class="col-10">
                  <b-form-file
                    accept="image/*"
                    id="file-small"
                    size="sm"
                    class="file1"
                    v-on:change="onFileChange($event,'profile','file1')"
                    drop-placeholder="Drop file here"
                  ></b-form-file>
                </div>
              </div>
              <span class="help-block">{{ validation.firstError('data.profile') }}</span>
            </div>

            <!------------ Single Input ------------>
            <div
              class="form-group col-3 mt-5"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Password</label>
              <input
                type="password"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Password"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div class="form-group col-2 mt-5">
              <label>Status</label>
              <div class="row col-12">
                <b-form-checkbox
                  class="col-form-label-sm col-6"
                  v-model="data.status2"
                  name="status2"
                  :value="1"
                  :unchecked-value="null"
                >Active</b-form-checkbox>
                <b-form-checkbox
                  class="col-form-label-sm col-6"
                  v-model="data.status2"
                  name="status2"
                  :value="2"
                  :unchecked-value="null"
                >Deactive</b-form-checkbox>
              </div>
            </div>

            <!-------------- button -------------->
            <div class="col-12 mb-3 mt-2">
              <button type="submit" class="btn btn-sm btn-info">Submit</button>
            </div>
            <!-------------- button -------------->
          </form>
        </div>
        <!--============ Form End ============-->
      </div>
    </div>
  </div>
</template>

<script>
// define model name
const model = "trainer";

export default {
  data() {
    return {
      model: model,
      data: {},
      errors: {},
    };
  },
  methods: {
    submit: function () {
      const error = this.validation.countErrors();
      this.$validate().then((res) => {
        // If there is an error
        if (error > 0) {
          this.notification(
            "You need to fill " + error + " more empty mandatory fields",
            "warning"
          );
          return false;
        }

        // If there is no error
        if (res) {
          if (this.data.id) {
            this.update(this.model, this.data, this.data.id);
          } else {
            this.store(this.model, this.data);
          }
        }
      });
    },
  },
  created() {
    if (this.$route.params.id) {
      this.setBreadcrumbs(this.model, "edit"); // Set Breadcrumbs
      this.get_data(this.model, this.$route.params.id, "data"); // get data for edit
    } else {
      this.setBreadcrumbs(this.model, "create"); // Set Breadcrumbs
      setTimeout(() => (this.$root.spinner = false), 200);
    }
  },
  beforeCreate() {
    this.$root.spinner = true;
  },

  // ================== validation rule for form ==================
  validators: {
    "data.name": function (value = null) {
      //return Validator.value(value).required("Name is required");
    },
  },
};
</script>
