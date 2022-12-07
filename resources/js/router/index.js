import { createRouter, createWebHistory } from "vue-router";
import Home from "../pages/Home.vue";
import Dashboard from "../dashboard/main.vue";
import {
    AddCustomer,
    CustomerList,
    AddSupplier,
    SupplierList,
} from "../contact";
import { AddProduct, AllProduct, Category } from "../product";
import {
    AddSales,
    SalesList,
    ProductwiseSales,
    SaleSupplierList,
    WebsiteList,
    SoftwareList,
} from "../sales";
import {
    AddInvoice,
    InvoiceList,
    AddRecurringInvoice,
    RecurringInvoiceList,
} from "../invoice";
import {
    General,
    SMSSettings,
    EmailSettings,
    PrintHeader,
    Referrer,
    Hosting,
    Recurring,
} from "../settings";
import Finance from "../finance/FinanceIndex.vue";
import Report from "../report/ReportIndex.vue";

const routes = [
    { path: "/", name: "home", component: Home },
    { path: "/admin/dashboard", name: "dashboard.main", component: Dashboard },
    // contact route
    {
        path: "/contact/customer/add",
        name: "customer.add",
        component: AddCustomer,
    },
    {
        path: "/contact/customer/list",
        name: "customer.list",
        component: CustomerList,
    },
    {
        path: "/contact/supplier/add",
        name: "supplier.add",
        component: AddSupplier,
    },
    {
        path: "/contact/supplier/list",
        name: "supplier.list",
        component: SupplierList,
    },
    // Product route
    {
        path: "/product/add",
        name: "product.add",
        component: AddProduct,
    },
    {
        path: "/product/all",
        name: "product.all",
        component: AllProduct,
    },
    {
        path: "/product/category",
        name: "product.category",
        component: Category,
    },
    // {
    //     path: "/product/unit",
    //     name: "product.unit",
    //     component: Unit,
    // },
    // sales route
    {
        path: "/sales/add",
        name: "sales.add",
        component: AddSales,
    },
    {
        path: "/sales/list",
        name: "sales.list",
        component: SalesList,
    },
    {
        path: "/product/wise/sales",
        name: "product.wise.sales",
        component: ProductwiseSales,
    },
    {
        path: "/sales/supplier/list",
        name: "sales.supplier.list",
        component: SaleSupplierList,
    },
    {
        path: "/sales/website/list",
        name: "sales.website.list",
        component: WebsiteList,
    },
    {
        path: "/sales/software/list",
        name: "sales.software.list",
        component: SoftwareList,
    },
    // Invoice route
    {
        path: "/invoice/add",
        name: "invoice.add",
        component: AddInvoice,
    },
    {
        path: "/invoice/list",
        name: "invoice.list",
        component: InvoiceList,
    },
    {
        path: "/invoice/add/recurring",
        name: "invoice.add.recurring",
        component: AddRecurringInvoice,
    },
    {
        path: "/invoice/recurring/list",
        name: "invoice.list.recurring",
        component: RecurringInvoiceList,
    },
    // finance
    {
        path: "/finance/index",
        name: "finance",
        component: Finance,
    },
    // Report
    {
        path: "/report/index",
        name: "report.index",
        component: Report,
    },
    // Settings
    {
        path: "/settings/general",
        name: "settings.general",
        component: General,
    },
    {
        path: "/settings/sms",
        name: "settings.sms",
        component: SMSSettings,
    },
    {
        path: "/settings/emial",
        name: "settings.email",
        component: EmailSettings,
    },
    {
        path: "/settings/print/header",
        name: "settings.print.header",
        component: PrintHeader,
    },
    {
        path: "/settings/referrer",
        name: "settings.referrer",
        component: Referrer,
    },
    {
        path: "/settings/hosting",
        name: "settings.hosting",
        component: Hosting,
    },
    {
        path: "/settings/recurring",
        name: "settings.recurring",
        component: Recurring,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
