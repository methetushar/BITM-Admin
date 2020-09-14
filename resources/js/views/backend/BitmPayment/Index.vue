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

      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <a
            class="nav-link active show"
            id="home-tab"
            data-toggle="tab"
            href="#home"
            role="tab"
            aria-controls="home"
            aria-selected="true"
          >BITM</a>
        </li>
        <li class="nav-item" role="presentation">
          <a
            class="nav-link"
            id="profile-tab"
            data-toggle="tab"
            href="#profile"
            role="tab"
            aria-controls="profile"
            aria-selected="false"
          >Collaborative</a>
        </li>
      </ul>

      <div class="tab-content" id="myTabContent">
        <!--                BITM-->
        <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
          <table class="table table-striped table-bordered ">
            <thead class="bg-darken">
              <tr>
                <th width="5%">#</th>
                <th >Course Name</th>
                <th>Student Name</th>
                <th>Date</th>
                <th>Fees</th>
                <th>Pay Amount</th>
                <th>Due</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Modern Web Design</td>
                <td>Leyon</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>
              <tr>
                <td>02</td>
                <td>Cloud Journey with AWS: Beginner to Advance level</td>
                <td>Jelly</td>
                <td>07/04/2020</td>
                <td>Tk. 8,000</td>
                <td>Tk. 6,000</td>
                <td>Tk. 0000</td>
                <td class="text-primary text-center">Paid</td>
              </tr>

              <tr>
                <td>03</td>
                <td>Software Testing</td>
                <td>Paret</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>

              <tr>
                <td>04</td>
                <td>Microsoft Asp.net</td>
                <td>Leyon</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>

              <tr>
                <td>05</td>
                <td>Ethical Hacking</td>
                <td>Titaew</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.0000</td>
                <td class="text-primary text-center">Paid</td>
              </tr>

              <tr>
                <td>06</td>
                <td>Modern Web Design</td>
                <td>Patia</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>
            </tbody>
          </table>
        </div>
        <!--                COLLABORATIVE-->
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <table class="table table-striped table-bordered ">
            <thead class="bg-darken">
              <tr>
                <th width="5%">#</th>
                <th >Course Name</th>
                <th>Student Name</th>
                <th>Date</th>
                <th>Fees</th>
                <th>Pay Amount</th>
                <th>Due</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>01</td>
                <td>Modern Web Design</td>
                <td>Marit</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>
              <tr>
                <td>02</td>
                <td>Cloud Journey with AWS: Beginner to Advance level</td>
                <td>Jelly</td>
                <td>07/04/2020</td>
                <td>Tk. 8,000</td>
                <td>Tk. 6,000</td>
                <td>Tk. 0000</td>
                <td class="text-primary text-center">Paid</td>
              </tr>

              <tr>
                <td>03</td>
                <td>Software Testing</td>
                <td>Paret</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>

              <tr>
                <td>04</td>
                <td>Microsoft Asp.net</td>
                <td>Leyon</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>

              <tr>
                <td>05</td>
                <td>Ethical Hacking</td>
                <td>Lorem.</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>

              <tr>
                <td>06</td>
                <td>Modern Web Design</td>
                <td>Lorem ipsum.</td>
                <td>06/09/2020</td>
                <td>Tk. 5,000</td>
                <td>Tk. 3,000</td>
                <td>Tk.2,000</td>
                <td class="text-danger text-center">Pending</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!--============ Data List Start ============-->
      <!-- <div class="box-body box-min-height">
        <base-table
          :data="table.datas"
          :columns="table.columns"
          :routes="table.routes"
          thead-classes="bg-light text-secondary"
        ></base-table>
      </div>-->
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
const model = "bitmpayment";

// define table coloumn show in datatable / datalist
const tableColumns = [
  { field: "", title: "Name" },
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
<style >
  .bg-darken{
    background: #2d4a67;
    color: aliceblue;
  }
</style>