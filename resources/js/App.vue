<template>
  <div>
    <div>
      <div class="wrapper bg_body">
        <!-- <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__shake"
          src="dist/img/AdminLTELogo.png"
          alt="AdminLTELogo"
          height="60"
          width="60"
        />
      </div> -->

        <nav class="main-header navbar navbar-expand">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"
                ><i class="fas fa-bars"></i
              ></a>
            </li>
          </ul>

          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a
                class="nav-link"
                data-widget="navbar-search"
                href="#"
                role="button"
              >
                <i class="fas fa-search"></i>
              </a>
              <div class="navbar-search-block">
                <form class="form-inline">
                  <div class="input-group input-group-sm">
                    <input
                      class="form-control form-control-navbar"
                      type="search"
                      placeholder="Search"
                      aria-label="Search"
                    />
                    <div class="input-group-append">
                      <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                      </button>
                      <button
                        class="btn btn-navbar"
                        type="button"
                        data-widget="navbar-search"
                      >
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">15</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header"
                  >15 Notifications</span
                >
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-envelope mr-2"></i> 4 new messages
                  <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-users mr-2"></i> 8 friend requests
                  <span class="float-right text-muted text-sm">12 hours</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">
                  <i class="fas fa-file mr-2"></i> 3 new reports
                  <span class="float-right text-muted text-sm">2 days</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer"
                  >See All Notifications</a
                >
              </div>
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                data-widget="fullscreen"
                href="#"
                role="button"
              >
                <i class="fas fa-expand-arrows-alt"></i>
              </a>
            </li>
          </ul>
        </nav>

        <aside
          class="
            main-sidebar
            sidebar-dark-primary
            elevation-4
            bg_sideber bg_body
          "
        >
          <div class="sidebar">
            <nav class="mt-2">
              <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
              >
                <!-- Dashboard -->
                <li class="nav-item">
                  <router-link
                    :to="{ name: 'dashboard.main' }"
                    class="nav-link"
                  >
                    <i class="nav-icon fas fa-th"></i>
                    <p>Dashboard</p>
                  </router-link>
                </li>
                <!-- contact -->
                <li class="nav-item">
                  <a class="nav-link">
                    <i class="nav-icon fas fa-copy"></i>
                    <p>
                      Contact
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'customer.add' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Customer</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'customer.list' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Customer List</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'supplier.add' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Supplier</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'supplier.list' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Supplier List</p>
                      </router-link>
                    </li>
                  </ul>
                </li>
                <!-- Product -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-chart-pie"></i>
                    <p>
                      Product
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>

                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'product.all' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Product</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'product.add' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Product</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'product.category' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Category</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'product.unit' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Unit</p>
                      </router-link>
                    </li>
                  </ul>
                </li>
                <!-- Sales -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-tree"></i>
                    <p>
                      Sales
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <router-link :to="{ name: 'sales.add' }" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Sales</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'sales.list' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Sales List</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'product.wise.sales' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Productwise Sales</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'sales.supplier.list' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Supplier List</p>
                      </router-link>
                    </li>
                  </ul>
                </li>
                <!-- Invoice -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                      Invoice
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'invoice.add' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Invoice</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'invoice.list' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Invoice List</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'invoice.add.recurring' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Recurring Invoice</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'invoice.list.recurring' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Recurring Invoice List</p>
                      </router-link>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <router-link :to="{ name: 'finance' }" class="nav-link">
                    <i class="nav-icon far fa-image"></i>
                    <p>Finance</p>
                  </router-link>
                </li>
                <li class="nav-item">
                  <router-link :to="{ name: 'report.index' }" class="nav-link">
                    <i class="nav-icon fas fa-columns"></i>
                    <p>Report</p>
                  </router-link>
                </li>
                <!-- Setings -->
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-envelope"></i>
                    <p>
                      Settings
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'settings.general' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>General</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'settings.sms' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>SMS Settings</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'settings.email' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Email Settings</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'settings.print.header' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Print header</p>
                      </router-link>
                    </li>
                    <li class="nav-item">
                      <router-link
                        :to="{ name: 'settings.referrer' }"
                        class="nav-link"
                      >
                        <i class="far fa-circle nav-icon"></i>
                        <p>Referrer</p>
                      </router-link>
                    </li>
                  </ul>
                </li>

                <li class="nav-header">Profile</li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="nav-icon far fa-circle text-danger"></i>
                    <p class="text">Logout</p>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </aside>
        <div class="content-wrapper bg_body">
          <router-view></router-view>
        </div>

        <footer class="main-footer bg_body">
          <strong
            >Copyright &copy; 2014-2021 <a href="#">World Soft Zone</a>.</strong
          >
          All rights reserved.
          <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
          </div>
        </footer>

        <aside class="control-sidebar control-sidebar-dark"></aside>
      </div>
    </div>
  </div>
</template>
<script>
export default {};
</script>
<style lang="">
</style>