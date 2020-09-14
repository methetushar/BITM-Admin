<template>
  <div class="box box-success" v-if="!$root.spinner">
    <div class="box-header with-border">
      <h3 class="box-title">{{"Assign "+ model + " Create" }}</h3>

      <!--============ Add or Back Button Start ============-->
      <AddOrBackButton :route="model +'.index'" :portion="model" :icon="'arrow-left'" />
      <!--============ Add or Back Button End ============-->
    </div>

    <div class="box-body box-min-height">
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
            <label>Course</label>
            <select v-model="data.select" class="form-control form-control-sm">
              <option value>--Select one--</option>
              <option>Web Application Development Laravel</option>
              <option>Graphics Design</option>
              <option>Web Application Design</option>
            </select>
            <span class="help-block">{{ validation.firstError('data.name') }}</span>
          </div>
          <div class="form-group col-12 mb-2" v-if="data.select" style="min-height:120px;">
            <table class="table table-bordered table-hover table-striped">
              <tr>
                <th>Category</th>
                <td>Web Developement</td>
              </tr>
              <tr>
                <th>Course Title</th>
                <td>Web Application Development Laravel</td>
              </tr>
              <tr>
                <th>Total Class</th>
                <td>40</td>
              </tr>
              <tr>
                <th>Total Hours</th>
                <td>110h</td>
              </tr>
            </table>
          </div>
          <div class="w-100"></div>

          <!------------ Single Input ------------>
          <div
            class="form-group col-2"
            :class="{ 'has-error': validation.hasError('data.date'), 'has-success': data.date }"
          >
            <label>Start Date</label>
            <b-form-datepicker
              id="datepicker-sm"
              size="sm"
              v-model="data.date"
              :date-format-options="{ year: 'numeric', month: 'short', day: '2-digit', weekday: 'short' }"
              class="col-12 no-padding"
            ></b-form-datepicker>
            <span class="help-block">{{ validation.firstError('data.date') }}</span>
          </div>
          <!------------ Single Input ------------>
          <div
            class="form-group col-2"
            :class="{ 'has-error': validation.hasError('data.date'), 'has-success': data.date }"
          >
            <label>End Date</label>
            <b-form-datepicker
              id="datepicker-sm"
              size="sm"
              v-model="data.date"
              :date-format-options="{ year: 'numeric', month: 'short', day: '2-digit', weekday: 'short' }"
              class="col-12 no-padding"
            ></b-form-datepicker>
            <span class="help-block">{{ validation.firstError('data.date') }}</span>
          </div>
          <!------------ Single Input ------------>
          <div
            class="form-group col-2"
            :class="{ 'has-error': validation.hasError('data.date'), 'has-success': data.date }"
          >
            <label>Start Time</label>
            <input type="time" class="form-control form-control-sm" />
            <span class="help-block">{{ validation.firstError('data.date') }}</span>
          </div>
          <!------------ Single Input ------------>
          <div
            class="form-group col-2"
            :class="{ 'has-error': validation.hasError('data.date'), 'has-success': data.date }"
          >
            <label>End Time</label>
            <input type="time" class="form-control form-control-sm" />
            <span class="help-block">{{ validation.firstError('data.date') }}</span>
          </div>
          <!------------ Single Input ------------>
          <div
            class="form-group col-4"
            :class="{ 'has-error': validation.hasError('data.date'), 'has-success': data.date }"
          >
            <label>Days</label>
            <input type="input" placeholder="Saturday, Sunday" class="form-control form-control-sm" />
            <span class="help-block">{{ validation.firstError('data.date') }}</span>
          </div>

          <!------------ Single Input ------------>
          <div
            class="form-group col-3"
            :class="{ 'has-error': validation.hasError('data.name'), 'has-success': data.name }"
          >
            <label>Trainee</label>
            <select v-model="data.trainee" class="form-control form-control-sm">
              <option value>--Select one--</option>
              <option>Bappy Ahmed</option>
              <option>Tushar Islam</option>
            </select>
            <span class="help-block">{{ validation.firstError('data.name') }}</span>
          </div>

          <!-------------- button -------------->
          <div class="col-12 mb-3 mt-2">
            <button type="submit" class="btn btn-sm btn-info">Submit</button>
          </div>
          <!-------------- button -------------->
        </form>
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
      data: { select: "", trainee: "" },
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
      this.setBreadcrumbs(this.model, "create", "Assign Course"); // Set Breadcrumbs
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
