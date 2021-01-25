&lt;?php
 
class Latihan
{
    private $DISKON = 50000;
 
    /**
     * Memilah elemen array yang layak dapat diskon sesuai kriteria yang
diterapkan pada function strukDiskon
     * Parameter: $arrBelanjaan
     * Return: array 
     */
    function filterStrukYangLayakDapatDiskon($arrBelanjaan)
    {
        return array_filter($arrBelanjaan, array($this, &quot;strukDiskon&quot;));
    }
 
    /**
     * Rule pemilahan elemen array yang layak dapat diskon
     * Parameter: $arrBelanjaan
     * Return: array
     */
    protected function strukDiskon($arrBelanjaan)
    {
        if ($arrBelanjaan[&#39;jumlahBelanja&#39;] &gt; $this-&gt;DISKON) {
            return $arrBelanjaan;
        }
    }
}
 
$arrBelanjaan = array(
    array(&#39;nomorStruk&#39; =&gt; 1, &#39;jumlahBelanja&#39; =&gt; 77400),
    array(&#39;nomorStruk&#39; =&gt; 2, &#39;jumlahBelanja&#39; =&gt; 19000),
    array(&#39;nomorStruk&#39; =&gt; 3, &#39;jumlahBelanja&#39; =&gt; 49890),
    array(&#39;nomorStruk&#39; =&gt; 4, &#39;jumlahBelanja&#39; =&gt; 109000),
    array(&#39;nomorStruk&#39; =&gt; 5, &#39;jumlahBelanja&#39; =&gt; 56000),
);
 
$coba = new Latihan;
print_r($coba-&gt;filterStrukYangLayakDapatDiskon($arrBelanjaan));
