import { useState } from "react";
import { Configuration, OpenAIApi } from "openai";

function App() {
  const configuration = new Configuration({
    apiKey: secrets.REACT_APP_OPENAI_API_KEY,
  });
  const openai = new OpenAIApi(configuration);

  const [prompt, setPrompt] = useState("");
  const [result, setResult] = useState("");
  const [loading, setLoading] = useState(false);

  const handleClick = async () => {
    setLoading(true);
    try {
      const response = await openai.createCompletion({
        model: "text-davinci-003",
        prompt: prompt,
        temperature: 0.5,
        max_tokens: 100,
      });
      setResult(response.data.choices[0].text);
    } catch (error) {
      console.error(error);
    }
    setLoading(false);
  };

  return (
    <main className="main">
      <div className="w-2/4 mx-auto">
        <textarea
          type="text"
          value={prompt}
          onChange={(e) => setPrompt(e.target.value)}
          placeholder="Serwus, w czym mogę pomóc?"
          className="textarea"
        ></textarea>

        <button
          onClick={handleClick}
          disabled={loading || prompt.length === 0}
          className="btn"
        >
          {loading ? "Zaczekaj około 21 do 37 sekund" : "Zapytaj PapAI"}
        </button>

        <pre className="result">{result}</pre>
      </div>
    </main>
  );
}

export default App;