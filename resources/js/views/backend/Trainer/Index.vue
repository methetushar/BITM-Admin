<template>
  <div>
    <div class="box box-success" v-if="!$root.spinner">
      <div class="box-header with-border">
        <div class="row">
          <form v-on:submit.prevent="search" class="form-row col-12 no-padding pl-1">
            <!--============ Search Option Start ============-->
            <Search :fields_name="fields_name" />
            <!--============ Search Option End ============-->
          </form>
        </div>

        <!--============ Add or Back Button Start ============-->
        <AddOrBackButton :route="model+'.create'" :portion="model" :icon="'plus'" />
        <!--============ Add or Back Button End ============-->
      </div>

      <!--============ Data List Start ============-->
      <div class="box-body box-min-height">
        <table class="table table-bordered table-hover table-striped">
          <thead class="bg-purple text-white base-table-thead">
            <tr>
              <th class="sl">#</th>
              <th>Image</th>
              <th>Trainer ID</th>
              <th>Name</th>
              <th>Mobile</th>
              <th>Email</th>
              <th class="action">Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                <img :src="$root.userimage" height="35" />
              </td>
              <td>TR-0001</td>
              <td>Bappy Ahmed</td>
              <td>0194565634</td>
              <td>bappy@nogorsolutions.com</td>
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
              <td>
                <img :src="$root.userimage" height="35" />
              </td>
              <td>TR-0002</td>
              <td>Tushar Islam</td>
              <td>0186565655</td>
              <td>tushar@nogorsolutions.com</td>
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
      <!--============ Data List End ============-->

      <div class="box-footer clearfix">
        <!--============ Pagination Start ============-->
        <Pagination :url="model" v-if="!$root.spinner" :search_data="search_data" />
        <!--============ Pagination End ============-->
      </div>
    </div>
  </div>
</template>

<script>
// define model name
const model = "trainer";

// define table coloumn show in datatable / datalist
const tableColumns = [
  { field: "name", title: "Name" },
  { field: "created_at", title: "Created at" },
];
//json fields for export excel
const json_fields = {
  Name: "name",
  "Created at": "created_at",
};

export default {
  data() {
    return {
      model: model,
      json_fields: json_fields,
      fields_name: { 0: "Select One", name: "Name" },
      search_data: {
        pagination: 10,
        field_name: 0,
        value: "",
      },
      table: {
        columns: tableColumns,
        routes: {},
        datas: [],
        meta: [],
        links: [],
      },
    };
  },
  methods: {
    destroy(id) {
      this.destroy_data(this.model, id, this.search_data);
    },
    search() {
      this.get_paginate_data(this.model, this.search_data);
    },
  },
  created() {
    this.get_paginate_data(this.model, this.search_data); // get data list
    this.getRouteName(this.model); // get route name for edit / delete / show
    this.setBreadcrumbs(this.model, "index"); // Set Breadcrumbs
  },
};
</script>
