class CreateFailedJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema: :create('pelajars', function(Blueprint $table)){
        $table->string('id',45);
        $table->string('nama',150);
        $table->date('tanggal lahir');
        $table->string('alamat',255);
        $table->integer('phone');
        $table->primary('id');
        $table->timestamps();
    };
}    

    /**
    *Reverse the migration.
    *
    *@return void
    */
    public function down() 
    {
        Schema: :dropIfExists('pelajars');
    }