<template>
  <div v-if="!$root.spinner" class="container">
<div :class="role_name === 'Super Admin' ? 'bitm-dashboard': 'bitm-dashboard d-none'">
        <h2 class="text-center">BITM Dashboard</h2>
        <div class="row ml-3">
            <div class="col-md-4 border m-1 p-3 Courses">
                <div class="icon">
                    <i class="fa fa-book fa-3x"></i>
                </div>
                <div class="data">
                    <h3>563</h3>
                    <h4>Courses</h4>
                </div>
            </div>
            <div class="col-md-4 border m-1 p-3 Batches">
                <div class="icon">
                    <i class="fa fa-users fa-3x"></i>
                </div>
                <div class="data">
                    <h3>456</h3>
                    <h4>Total Batches</h4>
                </div>
            </div>
            <div class="col-md-4 border m-1 p-3 Trainers">
                <div class="icon">
                    <i class="fa fa-user-circle fa-3x"></i>
                </div>
                <div class="data">
                    <h3>556</h3>
                    <h4>Total Trainers</h4>
                </div>
            </div>
        </div>
        <div class="row ml-3">
            <div class="col-md-4 border m-1 Trainees">
                <div class="icon">
                    <i class="fa fa-user fa-3x"></i>
                </div>
                <div class="data">
                    <h3>565</h3>
                    <h4>Total Trainees</h4>
                </div>
                <div class="row">
                    <div class="col-md-6 border Male">
                        <div class="sub_icon">
                            <div class="col-md-12 p-0">
                                <i class="fa fa-male fa-3x"></i>
                                <h4>156</h4>
                            </div>
                            <div class="col-md-12 p-0">
                                <h5>Total Trainees <br>(Male)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border Female">
                        <div class="sub_icon">
                            <i class="fa fa-female fa-3x"></i>
                            <h4>56</h4>
                            <h5>Total Trainees <br> (Female)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border m-1 Certified">
                <div class="icon">
                    <i class="fa fa-user fa-3x"></i>
                </div>
                <div class="data">
                    <h3>565</h3>
                    <h4>Total Certified Trainees</h4>
                </div>
                <div class="row">
                    <div class="col-md-6 border Male">
                        <div class="sub_icon">
                            <div class="col-md-12 p-0">
                                <i class="fa fa-male fa-3x"></i>
                                <h4>156</h4>
                            </div>
                            <div class="col-md-12 p-0">
                                <h5>Total Certified Trainees (Male)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border Female">
                        <div class="sub_icon">
                            <i class="fa fa-female fa-3x"></i>
                            <h4>56</h4>
                            <h5>Total Certified Trainees (Female)</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 border m-1 Trainees">
                <div class="icon">
                    <i class="fa fa-address-card fa-3x"></i>
                </div>
                <div class="data">
                    <h3>565</h3>
                    <h4>Today Trainees Attendance</h4>
                </div>
                <div class="row">
                    <div class="col-md-6 border Male">
                        <div class="sub_icon">
                            <div class="col-md-12 p-0">
                                <i class="fa fa-male fa-3x"></i>
                                <h4>156</h4>
                            </div>
                            <div class="col-md-12 p-0">
                                <h5>Today Trainees Attendance (Male)</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 border Female">
                        <div class="sub_icon">
                            <i class="fa fa-female fa-3x"></i>
                            <h4>56</h4>
                            <h5>Today Trainees Attendance (Female)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mx-4">
            <div class="col-md-6 border  p-3 last_row">
                <div class="icon">
                    <i class="fa fa-users fa-3x"></i>
                </div>
                <div class="data">
                    <h3>556</h3>
                    <h4>Total Assessors</h4>
                </div>
            </div>
            <div class="col-md-6 border  p-3 last_row">
                <div class="icon">
                    <i class="fa fa-users fa-3x"></i>
                </div>
                <div class="data">
                    <h3>256</h3>
                    <h4>Total Speackers</h4>
                </div>
            </div>
        </div>
    </div>
 <div :class="role_name === 'Collaborative' ? 'collaborative-dashboard': 'collaborative-dashboard d-none'">
          <h2 class="text-center">Collaborative Dashboard</h2>
          <div class="row ml-3">
              <div class="col-md-4 border m-1 p-3">
                  <div class="icon">
                      <i class="fa fa-building fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>556</h3>
                      <h4>Total Companies</h4>
                  </div>
              </div>
              <div class="col-md-4 border m-1 p-3">
                  <div class="icon">
                      <i class="fa fa-book fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>563</h3>
                      <h4>Courses</h4>
                  </div>
              </div>
              <div class="col-md-4 border m-1 p-3">
                  <div class="icon">
                      <i class="fa fa-users fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>456</h3>
                      <h4>Total Batches</h4>
                  </div>
              </div>
          </div>

          <div class="row ml-3">
              <div class="col-md-4 border m-1 ">
                  <div class="icon">
                      <i class="fa fa-user fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>565</h3>
                      <h4>Total Trainees</h4>
                  </div>

                  <div class="row">
                      <div class="col-md-6 border Male">
                          <div class="sub_icon">
                              <div class="col-md-12 p-0">
                                  <i class="fa fa-male fa-3x"></i>
                                  <h4>156</h4>
                              </div>
                              <div class="col-md-12 p-0">
                                  <h5>Total Trainees <br> (Male)</h5>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 border Female">
                          <div class="sub_icon">
                              <i class="fa fa-female fa-3x"></i>
                              <h4>56</h4>
                              <h5>Total Trainees <br> (Female)</h5>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 border m-1">
                  <div class="icon">
                      <i class="fa fa-user fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>256</h3>
                      <h4>Total Certified Trainees</h4>
                  </div>

                  <div class="row">
                      <div class="col-md-6 border Male">
                          <div class="sub_icon">
                              <div class="col-md-12 p-0">
                                  <i class="fa fa-male fa-3x"></i>
                                  <h4>156</h4>
                              </div>
                              <div class="col-md-12 p-0">
                                  <h5>Total Certified Trainees (Male)</h5>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 border Female">
                          <div class="sub_icon">
                              <i class="fa fa-female fa-3x"></i>
                              <h4>56</h4>
                              <h5>Total Certified Trainees (Female)</h5>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 border m-1 ">
                  <div class="icon">
                      <i class="fa fa-user fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>564</h3>
                      <h4>Total Assesed Trainees </h4>
                  </div>

                  <div class="row">
                      <div class="col-md-6 border Male">
                          <div class="sub_icon">
                              <div class="col-md-12 p-0">
                                  <i class="fa fa-male fa-3x"></i>
                                  <h4>156</h4>
                              </div>
                              <div class="col-md-12 p-0">
                                  <h5>Total Assesed Trainees (Male)</h5>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 border Female">
                          <div class="sub_icon">
                              <i class="fa fa-female fa-3x"></i>
                              <h4>56</h4>
                              <h5>Total Assesed Trainees (Female)</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row mx-4">
              <div class="col-md-6 border  p-3 last_row">
                  <div class="icon">
                      <i class="fa fa-users fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>556</h3>
                      <h4>Total Trainers</h4>
                  </div>
              </div>
              <div class="col-md-6 border  p-3 last_row">
                  <div class="icon">
                      <i class="fa fa-users fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>256</h3>
                      <h4>Total Assessors</h4>
                  </div>
              </div>
          </div>
      </div>

      <div :class="role_name === 'SEIP' ? 'seip-dashboard': 'seip-dashboard d-none' ">
          <h2 class="text-center">SEIP Dashboard</h2>
          <div class="row ml-3">
              <div class="col-md-4 border m-1 p-3">
                  <div class="icon">
                      <i class="fa fa-book fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>563</h3>
                      <h4>Courses</h4>
                  </div>
              </div>
              <div class="col-md-4 border m-1 p-3">
                  <div class="icon">
                      <i class="fa fa-users fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>456</h3>
                      <h4>Total Batches</h4>
                  </div>
              </div>
              <div class="col-md-4 border m-1 p-3">
                  <div class="icon">
                      <i class="fa fa-user-circle fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>556</h3>
                      <h4>Total Trainers</h4>
                  </div>
              </div>
          </div>
          <div class="row ml-3">
              <div class="col-md-4 border m-1 ">
                  <div class="icon">
                      <i class="fa fa-user fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>565</h3>
                      <h4>Total Trainees</h4>
                  </div>

                  <div class="row">
                      <div class="col-md-6 border Male">
                          <div class="sub_icon">
                              <div class="col-md-12 p-0">
                                  <i class="fa fa-male fa-3x"></i>
                                  <h4>156</h4>
                              </div>
                              <div class="col-md-12 p-0">
                                  <h5>Total Trainees <br> (Male)</h5>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 border Female">
                          <div class="sub_icon">
                              <i class="fa fa-female fa-3x"></i>
                              <h4>56</h4>
                              <h5>Total Trainees <br> (Female)</h5>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 border m-1">
                  <div class="icon">
                      <i class="fa fa-user fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>256</h3>
                      <h4>Total Enrolled Trainees</h4>
                  </div>

                  <div class="row">
                      <div class="col-md-6 border Male">
                          <div class="sub_icon">
                              <div class="col-md-12 p-0">
                                  <i class="fa fa-male fa-3x"></i>
                                  <h4>156</h4>
                              </div>
                              <div class="col-md-12 p-0">
                                  <h5>Total Enrolled Trainees (Male)</h5>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 border Female">
                          <div class="sub_icon">
                              <i class="fa fa-female fa-3x"></i>
                              <h4>56</h4>
                              <h5>Total Enrolled Trainees (Female)</h5>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 border m-1">
                  <div class="icon">
                      <i class="fa fa-address-card fa-3x"></i>
                  </div>
                  <div class="data">
                      <h3>564</h3>
                      <h4>Total Assesed Trainees </h4>
                  </div>

                  <div class="row">
                      <div class="col-md-6 border Male">
                          <div class="sub_icon">
                              <div class="col-md-12 p-0">
                                  <i class="fa fa-male fa-3x"></i>
                                  <h4>156</h4>
                              </div>
                              <div class="col-md-12 p-0">
                                  <h5>Total Assesed Trainees (Male)</h5>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 border Female">
                          <div class="sub_icon">
                              <i class="fa fa-female fa-3x"></i>
                              <h4>56</h4>
                              <h5>Total Assesed Trainees (Female)</h5>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row ml-3">
              <div class="col-md-8">
                  <div class="row">
                      <div class="col-md-5 border m-1">
                          <div class="icon">
                              <i class="fa fa-user fa-3x"></i>
                          </div>
                          <div class="data">
                              <h3>564</h3>
                              <h4>Certified Trainees </h4>
                          </div>

                          <div class="row ">
                              <div class="col-md-6 border Male">
                                  <div class="sub_icon">
                                      <i class="fa fa-male fa-2x"></i>
                                      <h4>54</h4>
                                      <h5>Certified Trainees  <br> (Male)</h5>
                                  </div>
                              </div>
                              <div class="col-md-6 border Female">
                                  <div class="sub_icon">
                                      <i class="fa fa-female fa-3x"></i>
                                      <h4>34</h4>
                                      <h5>Certified Trainees  (Female)</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-5 border m-1">
                          <div class="icon">
                              <i class="fa fa-user fa-3x"></i>
                          </div>
                          <div class="data">
                              <h3>56</h3>
                              <h4>Employed Trainees </h4>
                          </div>

                          <div class="row">
                              <div class="col-md-6 border Male">
                                  <div class="sub_icon">
                                      <i class="fa fa-male fa-2x"></i>
                                      <h4>54</h4>
                                      <h5>Employed Trainees  <br> (Male)</h5>
                                  </div>
                              </div>
                              <div class="col-md-6 border Female">
                                  <div class="sub_icon">
                                      <i class="fa fa-female fa-3x"></i>
                                      <h4>34</h4>
                                      <h5>Employed Trainees  (Female)</h5>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-3 border ml-5 p-3 last_row">
                  <div class="icon mt-5">
                      <i class="fa fa-users fa-3x"></i>
                  </div>
                  <div class="data  mt-3">
                      <h3>256</h3>
                      <h4>Total Assessor</h4>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
const breadcrumb = [{ route: "admin.dashboard", title: "Dashboard" }];
export default {
  data() {
    return {
      menus: [],
        role:[],
        role_name:[]
    };
  },
  methods: {
    getMenus() {
      this.$root.spinner = true;
      axios
        .get("/get-dashboard-menus")
        .then(res =>(this.menus = res.data))
        .catch(error => console.log())
        .then(alw => setTimeout(() => (this.$root.spinner = false), 200));
    }
  },
  created() {
    this.getMenus();
    breadcrumbs.dispatch("setBreadcrumbs", breadcrumb);

  },
  mounted(){
      this.role_name = Admin.role();
  }
};
// this.role = res.data.role
// for (var i = 0; i < res.data.role.length; i++) {
//     this.role = this.role[i].name
//     console.log(this.role)
// }
// console.log(this.role)
</script>
<style>
.icon i {
    font-size: 61px;
    float: left;
    width: auto;
    margin-right: 12px;
}
@media (min-width: 768px) {
    .col-md-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.333333%;
        flex: 0 0 33.333333%;
        max-width: 31.333333%;
    }
}
.sub_icon i {
    font-size: 40px;
    float: left;
    margin-right: 10px;
}
.sub_icon h4 {
    font-size: 21px;
    text-align: center;
    line-height: 34px;
}
.sub_icon h5 {
    font-size: 13px;
    text-align: center;
    line-height: 13px;
}
.data h4 {
    font-size: 17px;
}
.ml-4, .mx-4 {
    margin-left: 21px !important;
}
.mr-4, .mx-4 {
    margin-right: 28px !important;
}
.col-md-4.border.m-1.p-3 {
    background: #054787;
    color: aliceblue;
}
.col-md-4.border.m-1.Trainees.icon i {
    color: #585858 !important;
}
 .col-md-4.border.m-1.Certified.icon i {
     color: #585858 !important;
 }
.col-md-4.border.m-1, .col-md-5.border.m-1 {
    background: #fefefe;
}
.col-md-6.border.Male.sub_icon i{
    color: aliceblue !important;
}
.col-md-6.border.Female.sub_icon i{
    color: aliceblue !important;
}
.col-md-6.border.Male {
    background: #dc4335;
    padding-top: 3px;
    color: aliceblue;
}
.col-md-6.border.Female {
    background: #062458;
    color: aliceblue;
    padding-top: 3px;
}
.last_row {
    background: #b7e638 !important;
}
</style>
