public partial class NameForm : Form
{
    private List<Name> names_ = new List<Name>();

    public NameForm()
    {
        names_.Add(new Name("",""));
        names_.Add(new Name("",""));
        names_.Add(new Name("",""));

        NameDataGrid.DataSource = names_;

        NameDataGrid.colums[0].Width=200;
        NameDataGrid.colums[1].Width=200;

        // 日本語クリック
        {
            var names = names_.Where(x=>x.Japanese.ToLower().Contents(JapaneseTextBox.Text.ToLower()))
            NameDataGrid.DataSource = names.ToList();
        }
        // 語クリック
        {
            var names = names_.Where(x=>x.English.ToLower().Contents(EnglishTextBox.Text.ToLower()))
            NameDataGrid.DataSource = names.ToList();
        }
    }
}