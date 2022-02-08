namespace ReadableNames
{
    internal sealed class Name
    {
        public Name(string japanese, string english)
        {
            Japanese = japanese;
            English = english;
        }

        public string Japanese {get;}
        public string English {get;}
    }
}