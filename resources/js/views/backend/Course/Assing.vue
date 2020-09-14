<template>
  <div class="box box-success" v-if="!$root.spinner">
    <div class="box-header with-border">
      <h3 class="box-title">{{"Assign "+ model + " List" }}</h3>

      <div class="box-tools pull-right">
        <router-link
          :to="{name:'courseAssign.create'}"
          class="btn btn-xs btn-success pull-left text-white"
        >
          <i class="fa fa-plus"></i> Add New
        </router-link>
      </div>
    </div>

    <div class="box-body box-min-height">
      <table class="table table-bordered table-hover table-striped">
        <thead class="bg-purple text-white base-table-thead">
          <tr>
            <th class="sl">#</th>
            <th>Course Title</th>
            <th>Batch</th>
            <th>Trainee Name</th>
            <th class="text-center">Total Class</th>
            <th class="text-center">Total Hours</th>
            <th class="action">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Web Application Development Laravel</td>
            <td>Batch-29</td>
            <td>Tushar Islam</td>
            <td class="text-center">40</td>
            <td class="text-center">110h</td>
            <td class="action">
              <router-link to="#" class="btn btn-xs btn-success action-view" title="View">
                <i class="fa fa-eye"></i>
              </router-link>

              <router-link to="#" class="btn btn-xs btn-primary action-pencil" title="Edit">
                <i class="fa fa-pencil"></i>
              </router-link>

              <button class="btn btn-xs btn-danger action-trash" title="Delete">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Web Application Design</td>
            <td>Batch-29</td>
            <td>Bappy Ahmed</td>
            <td class="action">30</td>
            <td class="action">90h</td>
            <td class="action">
              <router-link to="#" class="btn btn-xs btn-success action-view" title="View">
                <i class="fa fa-eye"></i>
              </router-link>

              <router-link to="#" class="btn btn-xs btn-primary action-pencil" title="Edit">
                <i class="fa fa-pencil"></i>
              </router-link>

              <button class="btn btn-xs btn-danger action-trash" title="Delete">
                <i class="fa fa-trash"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
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
      data: [],
    };
  },
  created() {
    this.get_data(this.model, this.$route.params.id, "data"); // get data
    this.setBreadcrumbs(this.model, "index", "Assign Course"); // Set Breadcrumbs
  },
};
</script>
