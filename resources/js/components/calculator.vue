
<script>
    import numeral from "numeral";
    export default{
        data: function() {
            return {
                invest: 500,
                profit: '',
                month: '',
            }
        },

        computed: {
            cal_interest() {
                return  this.profit = this.invest * 0.25;
            },

            cal_month() {
                return numeral(this.profit / 6).format('0.00')
            }
        },
         filters: {

         }

    }
</script>
