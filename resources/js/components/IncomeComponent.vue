<template>
    <div>
        <div class="row row-cards">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0 border-bottom-0">
                        <h3 class="card-title">اجمالى ايردات الشهر</h3>
                        <div class="card-options">
                            <a class="btn btn-sm btn-primary" href="javascript:void(0)"><i
                                    class="fe fe-dollar-sign mb-0"></i></a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <h3 class="d-inline-block mb-2">{{ monthincomes }}</h3>
                        <div class="progress h-2 mt-2 mb-2">
                            <div class="progress-bar bg-primary" style="width: 50%;" role="progressbar"></div>
                        </div>
                        <div class="float-start">
                            <div class="mt-2">
                                <i class="fe fe-chevrons-up text-success"></i>
                                <span>12% معدل ذياده</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0 border-bottom-0">
                        <h3 class="card-title">ايردادات السنه</h3>
                        <div class="card-options">
                            <a class="btn btn-sm btn-success" href="javascript:void(0)"><i
                                    class="fe fe-dollar-sign mb-0"></i></a>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <h3 class="d-inline-block mb-2">{{ yearincomes }}</h3>
                        <div class="progress h-2 mt-2 mb-2">
                            <div class="progress-bar bg-success" style="width: 50%;" role="progressbar"></div>
                        </div>
                        <div class="float-start">
                            <div class="mt-2">
                                <i class="fe fe-credit-card text-success"></i>
                                <span>متوسط الايراد اليومى 450</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title text-center text-blue">اجمالى ايردات السنادى</h3>
            </div>
            <div class="card-body">
                <div class="chart-container">
                    <div id='chart'></div>
                </div>
            </div>
        </div>
        <div class="raw">
            <div class="table-responsive">
                <table class="table table-vcenter ">
                    <thead>
                        <tr class="border-top">
                            <th>اسم العميل</th>
                            <th>قيمه الايراد</th>
                            <th>نوع الايراد</th>
                            <th>تاريخ الايراد</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="income in incomes" :key="income.id">
                            <td>{{ income.customer.name }} </td>
                            <td class="text-success">{{ income.value }}</td>
                            <td>{{ income.type.type }}</td>
                            <td>{{ income.created_at | moment("dddd, MMMM Do YYYY - h:mm:ss a") }}</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
        <div class="md-2">
            <pagination :align='aligen' :data="laraveldata" @pagination-change-page="getincome"></pagination>
        </div>
    </div>
</template>

<script>

export default {

    data() {
        return {
            incomes: {},
            laraveldata: [],
            aligen: 'center',
            monthincomes: 0,
            yearincomes: 0,
            monthlyincomes: [],
            monthlyincomesarray: []

        }
    },

    mounted() {
        axios.get('/incomes?page=1')
            .then(res => {
                this.incomes = res.data.incomes.data
                this.laraveldata = res.data.incomes
            })

        axios.get('/incomesdata')
            .then(res => {
                this.monthincomes = res.data.monthincomes
                this.yearincomes = res.data.yearincomes

                this.monthlyincomes = res.data.monthlyincomes

                this.monthlyincomes.forEach((income) => {
                    this.monthlyincomesarray.push(income.incomes)
                })
                var options = {
                    series: [{
                        name: "الايردادات",
                        data: this.monthlyincomesarray
                    }],
                    chart: {
                        height: 400,
                        type: 'area',
                        zoom: {
                            enabled: true
                        }
                    },
                    dataLabels: {
                        enabled: false
                    },
                    stroke: {
                        curve: 'straight'
                    },
                    title: {
                        text: 'اجمالى ايردات سنه 2022',
                        align: 'center'
                    },
                    grid: {
                        row: {
                            colors: ['transparent'], // takes an array which will be repeated on columns
                            opacity: 0.5
                        },
                    },
                    xaxis: {
                        categories: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'اغسطس', 'سبتمبر', 'اكتوبر', 'نوفمبر', 'ديسمبر'],
                    }
                };

                var chart = new ApexCharts(document.querySelector("#chart"), options);
                chart.render();

            })
    },

    methods: {

        getincome: function (page = 1) {
            axios.get('/incomes?page=' + page)
                .then(res => {
                    this.incomes = res.data.incomes.data
                    this.laraveldata = res.data.incomes

                })
        }


    }

}



</script>
