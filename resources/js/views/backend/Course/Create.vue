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
              <label>Category</label>
              <select v-model="data.select" class="form-control form-control-sm">
                <option value>--Select one--</option>
                <option>Web Design</option>
                <option>Graphics Design</option>
              </select>
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Sub Category</label>
              <select v-model="data.select" class="form-control form-control-sm">
                <option value>--Select one--</option>
                <option>Web Design</option>
                <option>Graphics Design</option>
              </select>
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-6"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Course Title</label>
              <input
                type="text"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Course Title"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Target Jobs</label>
              <input
                type="text"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Target Jobs"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Total Hours</label>
              <input
                type="text"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Total Hours"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Total Class</label>
              <input
                type="text"
                v-model="data.name"
                name="name"
                class="form-control form-control-sm"
                placeholder="Total Class"
              />
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3"
              :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
            >
              <label>Skill Level</label>
              <select v-model="data.select" class="form-control form-control-sm">
                <option value>--Select one--</option>
                <option>All</option>
                <option>Intermediate Level</option>
                <option>Low Level</option>
              </select>
              <span class="help-block">{{ validation.firstError('data.name') }}</span>
            </div>
            <!------------ Single Input ------------>
            <div class="form-row col-12">
              <label class="col-12">Short Description</label>
              <div class="col-12">
                <textarea class="form-control" rows="3" placeholder="Short Description"></textarea>
              </div>
            </div>
            <!------------ Single Input ------------>
            <div class="form-row col-12 mt-3">
              <label class="col-12">Description</label>
              <div class="col-12">
                <editor :editorModel="'description'" />
              </div>
            </div>
            <!------------ Single Input ------------>
            <div class="form-row col-12 mt-3">
              <label class="col-12">Curriculum</label>
              <div class="col-12">
                <editor :editorModel="'description'" />
              </div>
            </div>
            <!------------ Single Input ------------>
            <div class="form-row col-12 mt-2">
              <label class="col-12">Module</label>
              <div class="col-12 row">
                <div class="col-10">
                  <input type="text" class="form-control form-control-sm" />
                </div>
                <div class="col-2">
                  <button class="btn btn-info btn-sm">
                    <i class="fa fa-plus"></i>
                  </button>
                  <button class="btn btn-danger btn-sm">
                    <i class="fa fa-times"></i>
                  </button>
                </div>
              </div>
            </div>
            <!------------ Single Input ------------>
            <div
              class="form-group col-3 mt-2"
              :class="{ 'has-error': validation.hasError('data.profile'), 'has-success': data.profile }"
            >
              <label>Course Image</label>
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
              class="form-group col-3 mt-2"
              :class="{ 'has-error': validation.hasError('data.profile'), 'has-success': data.profile }"
            >
              <label>Cover Image</label>
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
            <div class="w-100"></div>

            <!------------ Single Input ------------>
            <div class="form-group col-2">
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
const model = "course";

export default {
  data() {
    return {
      model: model,
      data: { select: "" },
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
